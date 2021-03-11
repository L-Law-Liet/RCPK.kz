<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Bid;
use App\Models\CommunityBlock;
use App\Models\HeaderSlide;
use App\Models\Option;
use App\Models\OrganizationBlock;
use App\Models\OrgSlider;
use App\Models\Test;
use App\Models\Vacancy;
use App\Models\VacancyBid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    public function index(){
        $organization_blocks = OrganizationBlock::all();
        $data['organization_blocks'] = $organization_blocks;
        $data['imgs'] = OrgSlider::all();
        $data['news'] = Article::where('image', '<>', null)->orderBy('created_at', 'desc')->take(5)->get();
        return view('index', $data);
    }
    public function showRes(Request $request){
        $arr = json_decode($request->arr);
        $total = count($arr);
        $score = Option::whereIn('id', $arr)->where('isTrue', true)->count();
        $index_res = "Вы набрали $score из $total";
        session(['index_res' => $index_res]);
        return response()->json($index_res);
    }
    public function showNews(){
        $data['news'] = Article::orderBy('created_at', 'desc')->get();
        $bread = 'Новости';
        switch (App::getLocale()){
            case 'en':
                $bread = 'News';
                break;
            case 'kz':
                $bread = 'Жаңалықтар';
                break;
        }
        $data['breadcrumbs'] = [$bread];
        return view('news', $data);
    }
    public function showArticle($slug){
        $data['article'] = Article::where('paragraph2', $slug)->firstOrFail();
        $bread = 'Статья';
        switch (App::getLocale()){
            case 'en':
                $bread = 'Article';
                break;
            case 'kz':
                $bread = 'Мақала';
                break;
        }
        $data['breadcrumbs'] = [$bread];
        return view('article', $data);
    }
    public function showVacancies(){
        $vacancies = Vacancy::all();
        $bread = 'Вакансии';
        switch (App::getLocale()){
            case 'en':
                $bread = 'Vacancies';
                break;
            case 'kz':
                $bread = 'Бос орындар';
                break;
        }
        $breadcrumbs = [$bread];
        return view('vacancy', compact('vacancies', 'breadcrumbs'));
    }
    public function staticPages(){
        $route = 'site.';
        $route .= \Illuminate\Support\Facades\Route::currentRouteName();
        return view('static', compact('route'));
    }

    public function bid(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ], $request->except('_token'));
        $to_name = env('APP_NAME');
        $to_email = env('MAIL_FROM_ADDRESS');
        $bid = new Bid();
        $bid->name = $request->name;
        $bid->phone = $request->phone;
        $bid->save();
        Mail::send('mails.bid', $request->except('_token'), function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Заявка с '.env('APP_NAME'));
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        });
        return response('Ваш запрос успешно отправлен', 200)
            ->header('Content-Type', 'application/json');
    }
    public function bidVacancy(Request $request){
        $data = $request->except('_token');
        $request->validate(
            [
                'vacancy_id' => 'required|exists:vacancies,id',
                'name' => 'required',
                'phone' => 'required'
            ],
            $data
        );
        $bid = new VacancyBid();
        $bid->name = $data['name'];
        $bid->phone = $data['phone'];
        $bid->vacancy_id = $data['vacancy_id'];
        $bid->text = $data['text'];
        $bid->save();
        return redirect()->route('index');
    }

    public function setLang($lang){
        session(['lang' => $lang]);
        return redirect()->back();
    }
    public function showSearch(Request $request){
        $search = $request->search;
        $bread = 'Поиск';
        switch (App::getLocale()){
            case 'en':
                $bread = 'Search';
                break;
            case 'kz':
                $bread = 'Іздеу';
                break;
        }
        $data['breadcrumbs'] = [$bread];
        $data['search'] = trim($search);
        $articles = Article::where('title', 'like', "%$search%")->get()->toArray();
        $vacancies = Vacancy::where('title', 'like', "%$search%")->get()->toArray();
        $data['list'] = array_merge($articles, $vacancies);
        return view('search', $data);
    }
    public function about(){
        $text = 'site.about_'.App::getLocale();
        return view('about', compact('text'));
    }
}
