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

Route::get('/comics', function () {
    // dd($comics);
    return view('comics', config('comics'));
})->name('comics');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/comics/1', function() {
    /* Questo è un metodo alternativo a quello fatto sopra. 
    In questo modo è possibile aggiungere in data altri dati che potrebbero servire oltre all'array dei comics. */

    $comics = config('comics');
    $data = [
        'comics' => $comics
    ];
    return view('single-movie', $data);
})->name('single-movie');