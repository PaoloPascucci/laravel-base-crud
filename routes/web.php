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

Route::get('admin/comics', 'Admin\ComicController@index')->name('comics');
Route::get('admin/comics/create', 'Admin\ComicController@create')->name('comics.create');
Route::post('admin/comics', 'Admin\ComicController@store')->name('comics.Storato');
Route::get('admin/comics/{comic}','Admin\ComicController@show')->name('comic');
Route::get('admin/comics/{comic}/edit', 'Admin\ComicController@edit')->name('comics.edit');
Route::put('admin/comics/{comic}', 'Admin\ComicController@update')->name('comic.update');
Route::delete('admin/comics/{comic}', 'Admin\ComicController@destroy')->name('comic.destroy');



Route::get('admin/movies', 'Admin\MovieController@index')->name('movies');
Route::get('admin/movies/create', 'Admin\MovieController@create')->name('movies.create');
Route::post('admin/movies', 'Admin\MovieController@store')->name('movies.Storato');
Route::get('admin/movies/{movie}','Admin\MovieController@show')->name('movie');
Route::get('admin/movies/{movie}/edit', 'Admin\MovieController@edit')->name('movies.edit');
Route::put('admin/movies/{movie}', 'Admin\MovieController@update')->name('movie.update');
Route::delete('admin/movies/{movie}', 'Admin\MovieController@destroy')->name('movie.destroy');
