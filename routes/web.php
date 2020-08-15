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

Route::get('/contacts', "ContactController@index")->name('contacts.index');
Route::post('/contacts', "ContactController@store")->name('contacts.store');
Route::get('/contacts/create', "ContactController@create")->name('contacts.create');
Route::get('/contacts/{id}', "ContactController@show")->name('contacts.show');
