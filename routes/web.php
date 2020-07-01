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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('todo/index','TodoController@index')->name('todo.index');
Route::get('todo/create','TodoController@create')->name('todo.create');
Route::post('todo/create','TodoController@store')->name('todo.store');
Route::get('todo/{todo}/edit','TodoController@edit')->name('todo.edit');
Route::put('todo/{todo}/update','TodoController@update')->name('todo.update');
Route::put('todo/{todo}/completed','TodoController@completed')->name('todo.completed');
Route::put('todo/{todo}/incompleted','TodoController@incompleted')->name('todo.incompleted');
Route::delete('todo/{todo}/delete','TodoController@delete')->name('todo.delete');