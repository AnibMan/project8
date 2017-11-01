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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
