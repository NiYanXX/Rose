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

Route::get('rose', function() {
    return view('rose');
});


Route::namespace('Oos')->group(function () {

    Route::get('/create', function() {
        return view('oos.createFile');
    });

});