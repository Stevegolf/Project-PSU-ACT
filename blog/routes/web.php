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
Route::get('/index','IndexController@index');
//Admin Page
Route::get('/manageuser','ManageuserController@manageuser');
Route::get('/messenger','MessengerController@messenger');
Route::get('/report','ReportController@report');
Route::get('/managedocument','ManagedocumentController@managedocument');
Route::get('/managecalendar','ManagecalendarController@managecalendar');
Route::get('/managenews','ManagenewsController@managenews');
Route::get('/managegallery','ManagegalleryController@managegallery');
Route::get('/dashboard','DashboardController@dashboard');



Route::post('/loginpsu','LoginController@login');
Route::get('/loginpsu','LoginController@viewlogin');
Auth::routes();
Route::get('/home', 'HomeController@index');











