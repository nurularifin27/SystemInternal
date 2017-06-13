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

    Route::get('/transaksi', function () {
        return view('transaksi');
    })->name('transaksi');
    
    Route::get('/sppd', function () {
        return view('sppd');
    })->name('sppd');

    Route::get('/akomodasi', function () {
        return view('akomodasi');
    })->name('akomodasi');

    Route::get('/lembur', function () {
        return view('lembur');
    })->name('lembur');

    Route::get('/karyawan', function () {
        return view('karyawan');
    })->name('data.karyawan');

    Route::get('/account', function () {
        return view('account');
    })->name('data.account');

    Route::get('/', function () {
        return view('welcome');
    })->name('login.page');

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