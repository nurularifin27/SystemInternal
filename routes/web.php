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

    Route::post('/login',[
        'uses'=>'KaryawanController@postLogin',
        'as'=> 'login'
    ]);
    Route::post('/register',[
        'uses'=>'KaryawanController@postRegister',
        'as'=> 'register'
    ]);
    Route::get('/logout',[
        'uses'=>'KaryawanController@getLogout',
        'as'=> 'logout'
    ]);
    Route::get('/dashboard',[
        'uses'=>'KaryawanController@getDashboard',
        'as'=> 'dashboard'
    ]);