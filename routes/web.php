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



Route::group(['middleware' => ['auth']], function () {
    Route::get('/welfare/input/{id}', 'WelfareController@create')->name('welfare.input');
    Route::post('/welfare/store/{id}', 'WelfareController@store')->name('welfare.store');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/student', 'WelfareController@student')->name('student');
    Route::get('/result', 'WelfareController@result')->name('result');
});




