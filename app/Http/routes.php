<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/actors/contact', ['uses' => 'PagesController@contact']);


Route::group(['prefix' => 'actors'], function(){
    Route::get('/index', ['uses' => 'ActorsController@index']);
    Route::get('/create', ['uses' => 'ActorsController@create']);
    Route::get('/read/{id}', ['uses' => 'ActorsController@read']);
    Route::get('/update/{id}', ['uses' => 'ActorsController@update']);
    Route::get('/delete/{id}', ['uses' => 'ActorsController@delete']);
});

Route::group(['prefix' => 'directors'], function(){
    Route::get('/index', ['uses' => 'DirectorsController@index']);
    Route::get('/create', ['uses' => 'DirectorsController@create']);
    Route::get('/read/{id}', ['uses' => 'DirectorsController@read']);
    Route::get('/update/{id}', ['uses' => 'DirectorsController@update']);
    Route::get('/delete/{id}', ['uses' => 'DirectorsController@delete']);
});

Route::group(['prefix' => 'movies'], function(){
    Route::get('/index', ['uses' => 'MoviesController@index']);
    Route::get('/create', ['uses' => 'MoviesController@create']);
    Route::get('/read/{id}', ['uses' => 'MoviesController@read']);
    Route::get('/update/{id}', ['uses' => 'MoviesController@update']);
    Route::get('/delete/{id}', ['uses' => 'MoviesController@delete']);
});