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

Route::Group([
    'namespace'=>'surveyor'
  ],function(){

    Route::get('/home', 'surveyorController@index')->name('home');
    Route::get('/surveyor/home','SurveyorController@index');

});

Route::Group([
      'prefix'=>'admin',
      'namespace'=>'admin'
    ],function(){
    //Route untuk Setting Surveyor
        Route::Group([
          'prefix'=>'surveyor',
      ],function(){
        Route::get('/view','AdminSettingSurveyor@index')->name('view-surveyor');
        Route::get('/detail/{id}','AdminSettingSurveyor@show')->name('detail');
        Route::get('/update/{id}','AdminSettingSurveyor@edit')->name('update');
        Route::get('/delete/{id}','AdminSettingSurveyor@destroy')->name('delete');
      });


    Route::get('/setting','AdminController@settingprofile')->name('admin-setting');
    Route::get('/home', 'AdminController@index')->name('admin-home');
    Route::get('/profile','AdminController@profile')->name('admin-profile');
});
