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
    return view('home');
})->name('index'); # mi permette di chiamare le rotte per i collegamenti

Route::get('/prodotti', function () {
    return view('prodotti');
})->name('prodotti');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');


