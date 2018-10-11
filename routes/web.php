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

/**
 * Front-end
 */

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contato','HomeController@contato')->name('contato');

Route::get('/sobre','HomeController@sobre')->name('sobre');

Route::get('/solicite','HomeController@solicite')->name('solicite');

Route::post('/contato', 'MailController@mailContato');

Route::post('/solicite', 'MailController@mailSolicite');

/**
 * Back-end
 */

/**
 * Override do login
 */
Route::get('/login', 'Auth\LoginController@redirectToProvider');

/**
 * Socialite routes
 */
Route::get('login/google', 'Auth\LoginController@redirectToProvider');

Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

/**
 * Voyager routes
 */
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

