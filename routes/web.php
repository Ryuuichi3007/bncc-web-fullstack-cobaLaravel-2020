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

// Route::get('/pertanyaan', 'PertanyaanController@index');

// Route::get('/pertanyaan/create', 'Pertanyaan_Controller@create');

// Route::post('/pertanyaan', 'PertanyaanController@store');

// Route::get('/pertanyaan/show/{id}', 'PertanyaanController@show');

// Route::get('/pertanyaan/{id}', 'Pertanyaan_Controller@destroy');

// Route::get('/pertanyaan/edit/{id}', 'Pertanyaan_Controller@edit');

// Route::post('/pertanyaan/{id}', 'Pertanyaan_Controller@update');

// Route::resource('/pertanyaan', 'Pertanyaan_Controller');

Route::get('/', 'MainController@index');

Route::get('/show/pertanyaan/{id}', 'MainController@show');

Route::get('/show/pertanyaan/answer/{id}', 'MainController@show2');

Route::get('/show/pertanyaan/right_answer/{id}', 'MainController@show3');

Route::get('/show/pertanyaan/tag/{id}', 'MainController@show4');
// Route::get('pertanyaan', function ()
// {
//   $pertanyaan = App\Pertanyaan::all();
//   return response()->json($pertanyaan);
// });

