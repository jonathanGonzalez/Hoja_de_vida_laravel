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
    return view('principal/index');
});

Route::get('principal/index', 'PrincipalController@index');
Route::get('principal/personal', 'PrincipalController@personal');
Route::get('principal/academico', 'PrincipalController@academico');
Route::get('principal/laboral', 'PrincipalController@laboral');
