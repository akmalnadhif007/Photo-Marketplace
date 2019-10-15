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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/upload', 'UploadImagesController@create');
Route::post('/images-save', 'UploadImagesController@store');
Route::post('/images-delete', 'UploadImagesController@destroy');

Route::get('/index', function () {
	return view('index');
});

Route::get('/dashboard', 'ChartController@index', function () {
	return view('dashboard');
});

Route::get('/tambahtag', 'TagController@get', function(){
	return view('tag.tambahtag');
});

Route::post('/tambahtag', 'TagController@tambah')->name('tambahtag');

Route::get('/images-show', 'SubmitController@index');
Route::post('/save-submit', 'SubmitController@create')->name('submit.save');