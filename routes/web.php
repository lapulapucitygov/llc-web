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

Route::get('/home', function () {
    return view('admin.index');
});

Route::get('/', function () {
    return view('coming');
});
Route::get('images', 'ImagesController@index')->name('admin.images');

Route::get('coming-soon', function () {
    return view('coming_soon');
});