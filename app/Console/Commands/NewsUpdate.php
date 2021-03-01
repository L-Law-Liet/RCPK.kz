<?php

namespace App\Console\Commands;

use App\Services\Directory;
use Illuminate\Console\Command;
use \App\Models\Article;

class NewsUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'news:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Daily Update News';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new \GuzzleHttp\Client();
        $count = 5;
        $news = [];
        $urls = [
            "https://www.gov.kz/api/v1/public/content-manager/news?sort-by=created_date:DESC&projects=eq:dsm&page=1&size=$count&lang=ru",
            "https://www.gov.kz/api/v1/public/content-manager/news?sort-by=created_date:DESC&projects=prokuror&page=1&size=$count&lang=ru",
            "https://www.gov.kz/api/v1/public/content-manager/news?sort-by=created_date:DESC&projects=emer&page=1&size=$count&lang=ru"
        ];
        for ($i = 0; $i < count($urls); $i++){
            $req = $client->get($urls[$i],
                [
                    'headers' => [
                        'Accept-Language' => 'ru',
                    ]
                ]);
            $resp = $req->getBody()->getContents();
            $news = array_merge($news, json_decode($resp));
        }
        $path = '/articles/';
        Directory::create(storage_path('app/public').$path);

        foreach ($news as $new){
            if(is_null(Article::where('paragraph2', $new->slug)->first())){
                $article = new Article();
                $article->title = $new->title;
                $article->title_kz = $new->title;
                $article->title_en = $new->title;
                if (isset($new->body)){
                    $body = substr(explode('body>', $new->body )[1],  0 , -2 );
                    $article->paragraph1 = $body;
                    $article->paragraph1_kz = $body;
                    $article->paragraph1_en = $body;
                }
                $article->paragraph2 = $new->slug;

                if ($new->heropic??''){
                    // Download image
                    $imgUrl = 'https://www.gov.kz'.$new->heropic;
                    $img = file_get_contents($imgUrl);
                    $date = time();
                    $jpg = $date.'.jpg';
                    $src = $path.$jpg;
                    file_put_contents(storage_path('app/public').$src, $img);

                    $article->image = $src;
                }
                $article->created_at = $new->created_date;
                $article->save();
            }
        }
        echo "\n\n===================News Updated===================\n\n";
    }
}
