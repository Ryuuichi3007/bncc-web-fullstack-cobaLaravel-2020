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

// Route::get('/', 'HomeController@home');

// Route::get('/index', 'HomeController@home');

// Route::get('/', function(){
//   return view('adminLTE/partial.content1');
// });

// Route::get('/data-tables', function(){
//   return view('adminLTE/partial.content2');
// });

// Route::get('/register', 'AuthController@register');

// Route::post('/welcome', 'AuthController@welcome');

Route::get('/pertanyaan', 'PertanyaanController@index');

Route::get('/pertanyaan/create', 'PertanyaanController@create');

Route::post('/pertanyaan', 'PertanyaanController@store');

Route::get('/pertanyaan/show/{id}', 'PertanyaanController@show');

Route::get('/pertanyaan/{id}', 'PertanyaanController@destroy');

Route::get('/pertanyaan/edit/{id}', 'PertanyaanController@edit');

Route::post('/pertanyaan/{id}', 'PertanyaanController@update');