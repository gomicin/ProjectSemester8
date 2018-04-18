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

Auth::routes();

Route::get('/home', 'surveyorController@index')->name('home');
Route::get('/surveyor/home','SurveyorController@index');

Route::Group(['prefix'=>'admin'],function(){
    Route::get('/home', 'AdminController@index')->name('admin-home');
    Route::get('/profile','AdminController@profile')->name('admin-profile');
});
