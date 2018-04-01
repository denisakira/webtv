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

Route::get('/', 'HomeController@index');

Route::get('/operacao', 'ModuleController@operacao');

Route::get('/producao', 'ModuleController@producao');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'HomeController@logout');

//VOYAGER
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
