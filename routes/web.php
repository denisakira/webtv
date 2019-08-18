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


//Home
Route::get('/', 'PageController@index');

Route::get('/home', 'PageController@index')->name('home');

Route::get('/contato','PageController@contato')->name('contato');

Route::post('/contato', 'MailController@mailContato');

Route::get('/sobre','PageController@sobre')->name('sobre');

Route::get('/solicite','PageController@solicite')->name('solicite');

Route::post('/solicite', 'MailController@mailSolicite');

Route::get('/login', 'Auth\LoginController@redirectToProvider');

Route::get('login/google', 'Auth\LoginController@redirectToProvider');

Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('{slug}', 'PageController@show');
