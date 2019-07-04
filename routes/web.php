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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/admin/{page}', function ($page) {
//    return view('site.'.$page);
////    return view('backend.'.$page);
//});
 Route::group(['middleware' => 'auth','prefix'=>'admin'], function () {
    Route::view('/','backend.dashboard')->name('admin.dashboard');
    Route::view('dashboard','backend.dashboard')->name('admin.dashboard');
    Route::get('home/slider','HomePage@slider')->name('admin.slider');
    Route::post('home/slider/save','HomePage@sliderSave')->name('admin.sliderSave');

    Route::get('home/about','HomePage@about')->name('admin.about');
    Route::post('home/about/save','HomePage@aboutSave')->name('admin.aboutSave');

    Route::get('news','MediaController@news')->name('admin.news');
    Route::post('news/save','MediaController@newsSave')->name('admin.newsSave');
    Route::get('news/delete/{id}','MediaController@newsDelete')->name('admin.newsDelete');
    Route::get('contacts','MediaController@contacts')->name('admin.contacts');
    Route::post('contacts/save','MediaController@contactsSave')->name('admin.contactsSave');
    Route::get('contacts/delete/{id}','MediaController@contactsDelete')->name('admin.contactsDelete');

    Route::get('team','FootballController@team')->name('admin.team');
    Route::post('teamSave','FootballController@teamSave')->name('admin.teamSave');

    Route::get('football_rewards','FootballController@football_rewards')->name('admin.football_rewards');
    Route::post('football_rewardsSave','FootballController@football_rewardsSave')->name('admin.football_rewardsSave');
    Route::get('football_fanclub','FootballController@football_fanclub')->name('admin.football_fanclub');
    Route::post('football_fanclubSave','FootballController@football_fanclubSave')->name('admin.football_fanclubSave');
    Route::get('football-fixtures','FootballController@football_fixtures')->name('admin.football_fixtures');
    Route::post('football-fixturesSave','FootballController@football_fixturesSave')->name('admin.football_fixturesSave');
    Route::get('football-fixtures/delete/{id}','FootballController@football_fixturesdelete')->name('admin.football_fixturesdelete');
});


Auth::routes();





Route::get('/', 'HomeController@index')->name('home');
Route::view('welcoming-letter', 'site.welcoming-letter')->name('welcoming-letter');
Route::view('board-and-management', 'site.board-and-management')->name('board-and-management');
Route::view('al-khor-sc', 'site.al-khor-sc')->name('al-khor-sc');
Route::view('history', 'site.history')->name('history');
Route::view('hall-of-fame', 'site.hall-of-fame')->name('hall-of-fame');
Route::view('mission-vision-and-values', 'site.mission-vision-and-values')->name('mission-vision-and-values');
Route::view('opportunities', 'site.opportunities')->name('opportunities');

Route::get('media-news', 'SiteController@newsList')->name('media-news');
Route::get('media-news-details/{news_id}', 'SiteController@getNews')->name('media-news-details');

Route::view('football-team', 'site.football-team')->name('football-team');
Route::view('football-team-management', 'site.football-team-management')->name('football-team-management');
Route::view('football-team-players', 'site.football-team-players')->name('football-team-players');
Route::get('football-rewards', 'HomeController@football_rewards')->name('football-rewards');
Route::get('football-fixtures', 'SiteController@getFixtures')->name('football-fixtures');
Route::get('football-fanclub', 'SiteController@getFanclub')->name('football-fanclub');
