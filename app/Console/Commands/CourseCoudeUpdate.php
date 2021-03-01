<?php

namespace App\Console\Commands;

use App\Models\Course;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CourseCoudeUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'courses:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Courses code';

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
     * @return void
     */
    public function handle()
    {
        DB::statement("UPDATE courses set body = cast(RAND()*900000+100000 as int)");
    }
}
