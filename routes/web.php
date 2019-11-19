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
    return view('welcome');
});

Auth::routes();


Route::get('/ph', 'PublishingHouseController@index')->name('pb');
Route::get('/ph/create', 'PublishingHouseController@create')->name('pbC');

Route::get('/author', 'AuthorController@index')->name('a');
Route::get('/author/create', 'AuthorController@create')->name('aC');

Route::get('/book', 'BookController@index')->name('b');
Route::get('/book/create', 'BookController@create')->name('bC');

Route::get('/comment', 'CommentController@index')->name('c');
Route::get('/comment/create', 'CommentController@create')->name('cC');


Route::get('/home', 'HomeController@index')->name('home');
