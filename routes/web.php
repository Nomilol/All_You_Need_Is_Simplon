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
    return view('simplonien.home');
});

Route::get('/check', function(){
    return view('simplonien.checkMail');
});

Route::post('/check', 'SimplonienController@postCheckMail');

Route::get('/data', 'SimplonienController@getData');

Route::get('/verifyToken', 'NonceController@verifyToken');

Route::post('/simplonien/add', 'SimplonienController@addSimplonien');

Route::post('/simplonien/edit/{id}', 'SimplonienController@postEditSimplonien');
