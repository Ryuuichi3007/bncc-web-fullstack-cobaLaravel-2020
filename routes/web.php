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

Route::group(['middleware'=>['auth']],function ()
{
  Route::get('/', function(){
    return view('welcome1');
  });
  Route::get('/database', 'MainController@index');
  Route::get('/database/show/pertanyaan/{id}', 'MainController@show1');
  Route::get('/database/show/pertanyaan/details/{id}', 'MainController@show2');
  Route::get('/database/pertanyaan/create', 'MainController@create');
  Route::post('/database/show/pertanyaan', 'MainController@store');
  Route::get('/database/pertanyaan/edit/{id}', 'MainController@edit');
  Route::post('/database/show/pertanyaan/{id}', 'MainController@update');
  Route::get('/database/show/pertanyaan/delete/{id}', 'MainController@destroy');
});

// Route::get('pertanyaan', function ()
// {
//   $pertanyaan = App\Pertanyaan::all();
//   return response()->json($pertanyaan);
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
