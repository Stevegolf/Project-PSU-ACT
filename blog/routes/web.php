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
Route::resource('activity','ActivityController');
Route::get('events','Admin\\EventController@index')->middleware('auth');
Route::get('activity','Admin\\EventController@activity');
Route::get('department','Admin\\EventController@department');
Route::get('createdepart','Admin\\EventController@createdepart');
Route::post('savedepart','Admin\\EventController@savedepart');

Route::resource('news','Admin\\NewsController');
Route::get('news','Admin\\NewsController@index')->middleware('auth');



Route::resource('/manageuser','Admin\\ManageuserController');
Route::get('/manageuser','Admin\\ManageuserController@index')->middleware('auth');
Route::get('/login','Auth\\LoginController@login');
//User Page
Route::get('/contact','ContactController@contact');
Route::get('/document','DocumentController@document');
Route::get('/club','ClubController@club');
Route::get('/studentcouncil','StudentcouncilController@studentcouncil');
Route::get('/studentunion','StudentunionController@studentunion');
Route::get('/gallery','GalleryController@gallery');
Route::get('/news','NewsController@news');
Route::get('/calendar','CalendarController@calendar');



Route::get('/','IndexController@index');


//Admin Page

Route::get('/messenger','MessengerController@messenger')->middleware('auth');
Route::get('/report','ReportController@report')->middleware('auth');
Route::get('/managedocument','ManagedocumentController@managedocument')->middleware('auth');
Route::get('/managecalendar','ManagecalendarController@managecalendar')->middleware('auth');
Route::get('/news','ManagenewsController@managenews')->middleware('auth');
Route::get('/managegallery','ManagegalleryController@managegallery')->middleware('auth');
Route::get('/dashboard','DashboardController@dashboard')->middleware('auth');

Route::post('/loginpsu','LoginController@login');
Route::get('/loginpsu','LoginController@viewlogin');




Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
