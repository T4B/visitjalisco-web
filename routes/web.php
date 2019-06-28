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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/coming-soon', 'ComingSoonController@index')->name('coming-soon');

Route::get('/jalisco', 'JaliscoController@jalisco')->name('jalisco');
Route::get('/este-es-mi-jalisco', 'ComingSoonController@index')->name('mi-jalisco');
Route::get('/agenda', 'ComingSoonController@index')->name('agenda');
Route::get('/regiones', 'ComingSoonController@index')->name('regiones');
Route::get('/experiencias', 'ComingSoonController@index')->name('experiencias');
Route::get('/rutas', 'ComingSoonController@index')->name('rutas');
Route::get('/eventos', 'ComingSoonController@index')->name('eventos');
