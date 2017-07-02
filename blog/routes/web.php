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
//admin Rout event
Route::resource('events','Admin\\EventController');
Route::get('events','Admin\\EventController@index')->middleware('auth');
//User Page
Route::get('/contact','ContactController@contact');
Route::get('/document','DocumentController@document');
Route::get('/club','ClubController@club');
Route::get('/studentcouncil','StudentcouncilController@studentcouncil');
Route::get('/studentunion','StudentunionController@studentunion');
Route::get('/gallery','GalleryController@gallery');
Route::get('/news','NewsController@news');
Route::get('/calendar','CalendarController@calendar');
Route::get('/activity','ActivityController@activity');
Route::get('/','IndexController@index');
Route::get('/login','Auth\\LoginController@login');

//Admin Page
Route::get('/manageuser','ManageuserController@manageuser')->middleware('auth');
Route::get('/messenger','MessengerController@messenger')->middleware('auth');
Route::get('/report','ReportController@report')->middleware('auth');
Route::get('/managedocument','ManagedocumentController@managedocument')->middleware('auth');
Route::get('/managecalendar','ManagecalendarController@managecalendar')->middleware('auth');
Route::get('/managenews','ManagenewsController@managenews')->middleware('auth');
Route::get('/managegallery','ManagegalleryController@managegallery')->middleware('auth');
Route::get('/dashboard','DashboardController@dashboard')->middleware('auth');



Route::post('/loginpsu','LoginController@login');
Route::get('/loginpsu','LoginController@viewlogin');


Auth::routes();
Route::get('/home', 'HomeController@index');












Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





