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




    Route::get ('/', 'IndexController@index')->name('/');
    Route::get ('add', 'UserController@form');
    Route::get ('article/{slug}', 'IndexController@show_article');
    Route::post ('add', 'UserController@add_article');
    Route::get('{user}/detail ', 'IndexController@show_user');

    Route::put('article/{slug}/update', 'UserController@update_article')->name('do_update');
    Route:: get('article/{slug}/edit', 'UserController@edit_article_form')->name('edit  ');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
