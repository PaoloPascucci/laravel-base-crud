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
})->name('welcome');

Route::get('admin/comics', 'admin\ComicController@index')->name('comics');
Route::get('admin/comics/create', 'admin\ComicController@create')->name('comics.create');
Route::post('admin/comics', 'admin\ComicController@store')->name('comics.Storato');
Route::get('admin/comics/{comic}','admin\ComicController@show')->name('comic');
Route::get('admin/comics/{comic}/edit', 'admin\ComicController@edit')->name('comics.edit');
Route::put('admin/comics/{comic}', 'admin\ComicController@update')->name('comic.update');
Route::delete('admin/comics/{comic}', 'admin\ComicController@destroy')->name('comic.destroy');