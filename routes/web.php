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
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'anas';
//     return view('about', ['nama' => $nama]);
// });
// Route::get('/data', 'pages/index');

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/create', 'SiswaController@create');
Route::post('/siswa', 'SiswaController@store');
Route::delete('/siswa/{id}', 'SiswaController@destroy');
Route::get('/siswa/{student}/edit', 'SiswaController@edit');
Route::patch('/siswa/{student}', 'SiswaController@update');
