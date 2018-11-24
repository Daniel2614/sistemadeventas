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
    //return view('welcome');
});

//Route::get('ajaxRequest', 'HomeController@ajaxRequest');

Route::post('ajaxRequest', 'HomeController@ajaxRequestPost');
Route::post('ajaxRequest2', 'HomeController@ajaxRequestPost2');
Route::post('ajaxRequest3', 'HomeController@ajaxRequestPost3');
Route::get('/', 'HomeController@consulta1');
Route::post('borrar1', 'HomeController@borrar1');




