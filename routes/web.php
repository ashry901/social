<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    Route::get('/', 'MainController@main')->name('main');

    Route::get('jobs', 'MainController@jobs')->name('jobs');
    Route::get('connection', 'MainController@connection')->name('connection');
    Route::get('profile', 'MainController@profile')->name('profile');
    Route::get('company-profile', 'MainController@companyProfile')->name('company-profile');
    Route::get('job-profile', 'MainController@jobProfile')->name('job-profile');
    Route::get('messages', 'MainController@messages')->name('messages');
    Route::get('notifications', 'MainController@notifications')->name('notifications');
    Route::get('not-found', 'MainController@notFound')->name('not-found');
    Route::get('faq', 'MainController@faq')->name('faq');
    Route::get('terms', 'MainController@terms')->name('terms');
    Route::get('privacy', 'MainController@privacy')->name('privacy');
    Route::get('blog', 'MainController@blog')->name('blog');
    Route::get('blog-single', 'MainController@blogSingle')->name('blog-single');
    Route::get('contact', 'MainController@contact')->name('contact');
    Route::get('pricing', 'MainController@pricing')->name('pricing');
    Route::get('maintence', 'MainController@maintence')->name('maintence');
    Route::get('coming-soon', 'MainController@comingSoon')->name('coming-soon');
    Route::get('sign-in', 'MainController@signIn')->name('sign-in');
    Route::get('sign-up', 'MainController@signUp')->name('sign-up');
    Route::get('edit-profile', 'MainController@editProfile')->name('edit-profile');
    Route::get('forgot-password', 'MainController@forgotPassword')->name('forgot-password');

    Route::group(['namespace' => 'Site', 'middleware' => 'guest'], function () {

    });





});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
