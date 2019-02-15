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

//Profile Site
Route::get('/','ProfileController@index');
Route::get('/database','ProfileController@database');
Route::get('/jasa','ProfileController@jasa');

//E-Learning Site
Route::get('/elearning', function () {
    return view('welcome');
});
// Route::get('/elearning', 'HomeController@index')->middleware('auth');


//Home Page E-Learning
Route::get('/home', 'HomeController@index')->middleware('auth');
// Route::get('/home', function(){
//     return view('welcome');
// });

//lesson
Route::get('/lesson','LessonController@index')->middleware('auth');
Route::get('/lesson/{id}', 'LessonController@subjek')->middleware('auth');
Route::get('/lesson/{id}/{id_lesson}','VideoController@index')->middleware('auth');
Route::get('/lesson/{id}/{id_lesson}/video={id_video}','VideoController@video')->middleware('auth');

//discussion
Route::get('/discuss','DiscussionController@index')->middleware('auth');

//classroom
Route::get('/class','ClassroomController@index')->middleware('auth');

//become a coach
Route::get('/coach','BecomeACoachController@index')->middleware('auth');

//setting
Route::get('/setting','SettingController@index')->middleware('auth');

Auth::routes();

//Bagian Admin
Route::get('/addVideo','VideoController@addView');