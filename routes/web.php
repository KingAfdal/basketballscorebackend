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

Route::resource('kontak', 'Kontak'); //tambahkan baris ini
Route::get('/', function () {
    return view('index'); //sebelumnya ('welcome')
});

Route::get('/halaman-kedua', function () {
    return view('halamandua');
});

Route::get('/kontak', 'ControllerKontak@index');
