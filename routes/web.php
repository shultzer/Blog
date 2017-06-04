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


    Route::get( '/', 'IndexController@index' )->name( '/' );
    Route::get( '/add', 'UserController@form' );
    Route::get( '/article/{article}', 'IndexController@show_article' );
    Route::get( '/tag/{slug}', 'IndexController@show_tags_articles' );


    Route::post( '/add', 'UserController@add_article' )->name( 'add' );
    Route::get( '/{user}/detail ', 'IndexController@show_user' );


    Route::put( '/article/{article}/update', 'UserController@update_article' )
         ->name( 'do_update' );
    Route:: get( '/article/{article}/edit', 'UserController@edit_article_form' )
         ->name( 'edit' );

    Route::get('/article/{article}/delete','UserController@delete_article')->name('delete');


    Auth::routes();

    Route::get( '/home', 'HomeController@index' )->name( 'home' );
