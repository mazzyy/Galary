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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/Gallary','GallaryController');
Route::get('/','GallaryController@index');

Route::post('/Gallary/upload','GallaryController@upload' );

Route::get('/Galary/{id}/photos','GallaryController@photos' );
Route::get('/Gallary/{id}/createphotos','GallaryController@photoscreate' );

Route::post('/Gallary/{id}/photoupload','GallaryController@photoupload' );
Route::get('/allphotos','GallaryController@allphotos' );





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
