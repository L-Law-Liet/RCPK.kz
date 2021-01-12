<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CommunityBlock;
use App\Models\Course;
use App\Models\HeaderSlide;
use App\Models\Option;
use App\Models\OrganizationBlock;
use App\Models\OrgSlider;
use App\Models\Test;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PagesController extends Controller
{
    public function index(){
        $headers = HeaderSlide::all();
        $data['headers'] = $headers;
        $community_blocks = CommunityBlock::all();
        $data['community_blocks'] = $community_blocks;
        $organization_blocks = OrganizationBlock::all();
        $data['organization_blocks'] = $organization_blocks;
        $data['test'] = Test::where('course_id', null)->where('title', 'Index')->firstOrFail();
        $data['questions'] = $data['test']->questions->shuffle();
        $data['imgs'] = OrgSlider::all();
//        dd($data);
        return view('index', $data);
    }
    public function showRes(Request $request){
        $data = $request->except('_token');
        $total = sizeof($data);
        $score = Option::whereIn('id', array_values($data))->where('isTrue', true)->count();
        $index_res = "Вы набрали $score из $total";
        session(['index_res' => $index_res]);
        return back();
    }
    public function showArticles(){
        $data['article'] = Article::firstOrFail();
        $data['breadcrumbs'] = ['Статья'];
        return view('article', $data);
    }
    public function showVacancies(){
        $vacancies = Vacancy::all();
        $breadcrumbs = ['Вакансии'];
        return view('vacancy', compact('vacancies', 'breadcrumbs'));
    }
    public function staticPages(){
        $route = 'site.';
        $route .= \Illuminate\Support\Facades\Route::currentRouteName();
        return view('static', compact('route'));
    }
}
