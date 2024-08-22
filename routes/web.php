<?php

use App\Http\Controllers\EmailController;
use App\Models\Banner;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    $contact = DB::table('contacts')->latest() ->first();
    $banners=Banner::where('status','1')->get();
    return view('frontend.index', compact('contact','banners'));
});

Route::post('/email', [EmailController::class, 'sendEmail'])->name('send.email');


Route::namespace('Admin\Auth')->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', 'LoginController@showLoginForm')->name('login');
    Route::post('/', 'LoginController@login');
    Route::get('logout', 'LoginController@logout')->name('logout');
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
    Route::get('password/confirm', 'ConfirmPasswordController@showConfirmForm')->name('password.confirm');
    Route::post('password/confirm', 'ConfirmPasswordController@confirm');
    Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify');
    Route::post('email/resend', 'VerificationController@resend')->name('verification.resend');
});


// For admin panel
Route::namespace('Admin')->name('admin.')->prefix('admin')->group(function(){

    Route::get('home', 'AdminController@adminIndex')->name('home');

//    webconfig  route
    // Route::get('config', 'HeroController@Index')->name('config');
    Route::get('config/create', 'HeroController@create')->name('config.create');
    Route::post('hero/store', 'HeroController@store')->name('hero.store');
    Route::post('service/store', 'HeroController@servicestore')->name('service.store');
    Route::post('client/store', 'HeroController@clientstore')->name('client.store');
    Route::post('tech/store', 'HeroController@techstore')->name('tech.store');
    Route::post('team/store', 'HeroController@teamstore')->name('team.store');
    Route::post('contact/store', 'HeroController@contactstore')->name('contact.store');
    Route::post('industry/store', 'HeroController@industrystore')->name('industry.store');
    Route::post('banner/store', 'HeroController@bannerStore')->name('banner.store');


});








