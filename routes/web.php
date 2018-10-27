<?php

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

Route::get('/', 'PagesController@index')->name('home');
Route::get('what-we-do', 'PagesController@what_we_do')->name('what-we-do');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::get('about-us', 'PagesController@about')->name('about');
Route::group(['prefix' => 'news-and-updates'], function () {
    Route::get('/', 'PagesController@news_n_updates')->name('news-home');
    Route::get('{slug}', 'PagesController@news_n_updates_details')->name('news-details');
    Route::get('category/{category}', 'PagesController@news_n_updates_category')->name('news-category');
    Route::get('tagged/{tag}', 'PagesController@news_n_updates_tags')->name('news-tags');  
});

Route::get('events/{slug}', 'PagesController@events_details')->name('event-details');
