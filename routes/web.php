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

Route::get('/', 'PrimeController@index');

Route::get('/getDegreeAjax/{faculty}/{level}', 'AjaxResponse@getDegree');

Route::get('/getSubjectAjax/{semester}/{degree}', 'AjaxResponse@getSubject');

Route::get('/requestQuestion', 'HomeController@requestQuestion');

Route::post('/requestQuestion', 'HomeController@storeQuestion');


Route::get('/reply/{q_id}', 'PrimeController@questionReply');


Route::get('/post/{q_id}', 'HomeController@post');

Route::post('/post/{q_id}', 'HomeController@storePost');

Route::get('/download/{filename}', 'PrimeController@downloadFile');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
