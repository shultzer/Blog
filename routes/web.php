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

    Route::get('/', 'IndexController@index');
    Route::get('/todo', 'TodoController@index');
    Route::post('/add-task', 'TodoController@add');
    Route::post('/del-task', 'TodoController@del');
    Route::get('parse', 'ParserController@index');
    Route::get('{user}/detail ', 'IndexController@show_user');