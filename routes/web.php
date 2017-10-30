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

Route::get('/', 'HomeController@index');

Route::get('/getDegreeAjax/{faculty}/{level}', 'HomeController@getDegree');

Route::get('/getSubjectAjax/{semester}/{degree}', 'HomeController@getSubject');


