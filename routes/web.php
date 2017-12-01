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

Route::get('/', 'PagesController@home')->name('home');

Route::resource('tasks','TasksController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/negociar', 'HomeController@negociar')->name('negociar');
Route::post('/tasks/trade/{task}','TrocasController@enviarProposta')->name('trocas.enviarProposta');
Route::post('/tasks/{id}','TrocasController@destroy')->name('trocas.destroy');
Route::resource('trocas','TrocasController');