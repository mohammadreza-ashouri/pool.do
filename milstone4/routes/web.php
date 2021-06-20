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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/api', 'HomeController@apis')->name('api');
Route::post('/api', 'HomeController@createApi')->name('create-api');
Route::get('/api/{api}', 'HomeController@deleteApi')->name('delete-api');
Route::get('/configuration', 'ConfigController@index')->name('config');
Route::post('/configuration', 'ConfigController@store')->name('config-save');
Route::get('/configuration/delete/{config}', 'ConfigController@delete')->name('config-delete');
Route::get('/download', 'DownloadController@index')->name('download');
