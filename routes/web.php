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

// Auth
    Route::get('registration', [GuestsController::class, 'showRegister'])->name('registration');
    Route::post('registration', [AuthController::class, 'register'])->name('register');
    Route::get('login', [GuestsController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('logging');
    Route::get('logout', [UsersController::class, 'logout'])->name('logout');

    Route::get('vacancy', [PagesController::class, 'showVacancies'])->name('vacancy');
    Route::get('search', [PagesController::class, 'showSearch'])->name('search');
    Route::get('success', [TestsController::class, 'showSuccess'])->name('success');
    Route::get('news', [PagesController::class, 'showNews'])->name('news');
    Route::get('article/{id}', [PagesController::class, 'showArticle'])->name('article');
    Route::get('about', [PagesController::class, 'about'])->name('about');
    Route::get('study', [PagesController::class, 'staticPages'])->name('study');
    Route::get('contacts', [PagesController::class, 'staticPages'])->name('contacts');
    Route::get('faq', [PagesController::class, 'staticPages'])->name('faq');
    Route::post('bid', [PagesController::class, 'bid'])->name('bid');
    Route::post('vacancy', [PagesController::class, 'bidVacancy'])->name('bid.vacancy');

//Route::group(['middleware' => 'verified'], function (){
    Route::get('test/{id}', [TestsController::class, 'showTest'])->name('test');
    Route::post('test/result/{test}', [TestsController::class, 'result'])->name('test.res');
    Route::get('video/{id}', [CoursesController::class, 'showMaterial'])->name('video');
    Route::post('activate', [CoursesController::class, 'activate'])->name('course.activate');
//});

    Route::get('cabinet', [UsersController::class, 'showCabinet'])->name('cabinet');

    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });
// verify view
    Route::get('/email/verify', function () {
        if (Auth::user()->email_verified_at){
            return redirect()->route('index');
        }
        return view('auth.verify');
    })->middleware('auth')->name('verification.notice');
// repeat
    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Ссылка на подтверждение отправлена!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');
// from email
    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect()->route('index');
    })->middleware(['auth', 'signed'])->name('verification.verify');

    Route::get('site', function (){
        return view('sitemap');
    })->name('site');
    Route::get('mail-view', function (){
        return view('mails.verify');
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


    Route::get('reset', [GuestsController::class, 'showReset'])->name('reset.show');
    Route::post('reset', [GuestsController::class, 'reset'])->name('reset.send');
    Route::get('change/{id}/{hash}', [GuestsController::class, 'showChangePassword'])->name('set.show');
    Route::post('change/{user}', [GuestsController::class, 'changePassword'])->name('set.send');

});
