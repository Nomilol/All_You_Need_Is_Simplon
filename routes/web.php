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

/*
    url avec token = blabalabalbala
    methode qui vérifie si le token de l'url est dans la db
    si oui, alors renvoit vers la page d'ajout sinon : renvoit vers la home
*/
