<?php

use Illuminate\Support\Facades\Route;

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

Route::get('showdata','ntxmember@showdata')->name('showdata');
Route::get('create','ntxmember@create')->name('create');
Route::post('insert','ntxmember@addmember')->name('insert');
Route::get('edit/{id}','ntxmember@edit');
Route::put('updateimg/{id}','ntxmember@update');
