<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\GuestsController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\UsersController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('locale')->group(function (){
    Route::get('/',  [PagesController::class, 'index'])->name('index');
    Route::get('/home', [PagesController::class, 'showRes'])->name('index.res');


    Route::get('vacancy', [PagesController::class, 'showVacancies'])->name('vacancy');
    Route::get('search', [PagesController::class, 'showSearch'])->name('search');
    Route::get('success', [TestsController::class, 'showSuccess'])->name('success');
    Route::get('news', [PagesController::class, 'showNews'])->name('news');
    Route::get('article/{id}', [PagesController::class, 'showArticle'])->name('article');
    Route::get('about', [PagesController::class, 'about'])->name('about');
    Route::get('study', [PagesController::class, 'staticPages'])->name('study');
    Route::post('bid', [PagesController::class, 'bid'])->name('bid');
    Route::post('vacancy', [PagesController::class, 'bidVacancy'])->name('bid.vacancy');

//Route::group(['middleware' => 'verified'], function (){
    Route::get('test/{id}', [TestsController::class, 'showTest'])->name('test');
    Route::post('test/result/{test}', [TestsController::class, 'result'])->name('test.res');
    Route::get('video/{id}', [CoursesController::class, 'showMaterial'])->name('video');
    Route::post('activate', [CoursesController::class, 'activate'])->name('course.activate');
//});

//    Route::get('cabinet', [UsersController::class, 'showCabinet'])->name('cabinet');

    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });

    Route::get('lang/{lang}', [PagesController::class, 'setLang'])->name('lang');

    Route::get('/news/update', function (){
        Artisan::call('news:update');
        Artisan::call('courses:update');
    });

    Route::prefix('/docs')->group(function (){
        Route::get('biot', [DocumentsController::class, 'biot'])->name('biot');
        Route::get('antiterror', [DocumentsController::class, 'antiterror'])->name('antiterror');
        Route::get('paramedika', [DocumentsController::class, 'paramedika'])->name('paramedika');
        Route::get('ptm', [DocumentsController::class, 'ptm'])->name('ptm');
        Route::get('sez', [DocumentsController::class, 'sez'])->name('sez');
        Route::get('council', [DocumentsController::class, 'council'])->name('council');
    });
});
