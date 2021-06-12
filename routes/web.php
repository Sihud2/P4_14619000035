<?php

use Illuminate\Support\Facades\Route;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

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

// login
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@store');
Route::get('/index', 'LoginController@create');

// Menu
Route::get('/buku', 'BukuController@index');

// eksport ke excel
Route::get('/ekspor', 'BukuController@exportdatabuku');