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

Route::get('/', "App\Http\Controllers\Cep\CepSearchingController@index")->name('cep.index');
Route::post('/', "App\Http\Controllers\Cep\CepSearchingController@index")->name('cep.index');

Route::get('/error', "App\Http\Controllers\Cep\CepSearchingController@errors")->name('error');
