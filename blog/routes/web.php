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

Route::resource('boards','Boards\\BoardsController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact','ContactController@contact');
Route::get('/document','DocumentController@document');
Route::get('/club','ClubController@club');
Route::get('/studentcouncil','StudentcouncilController@studentcouncil');
Route::get('/studentunion','StudentunionController@studentunion');
Route::get('/gallery','GalleryController@gallery');
Route::get('/news','NewsController@news');
Route::get('/calendar','CalendarController@calendar');
Route::get('/event','EventController@event');
Route::get('/index','IndexController@index');

Route::get('/admanageuser','AdmanageuserController@admanageuser');
Route::get('/admessenger','AdmessengerController@admessenger');
Route::get('/adreport','AdreportController@adreport');
Route::get('/addoucment','AddoucmentController@addoucment');
Route::get('/adcalendar','AdcalendarController@adcalendar');
Route::get('/adevent','AdeventController@adevent');
Route::get('/adnews','AdnewsController@adnews');
Route::get('/adgallery','AdgalleryController@adgallery');
Route::get('/dashboard','DashboardController@dashboard');


Route::post('/loginpsu','LoginController@login');
Route::get('/loginpsu','LoginController@viewlogin');

Auth::routes();
Route::get('/home', 'HomeController@index');









