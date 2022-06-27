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

Route::get('/comics/{id}', function($id) {
    /* Questo è un metodo alternativo a quello fatto sopra. 
    In questo modo è possibile aggiungere in data altri dati che potrebbero servire oltre all'array dei comics. In più c'è collect per selezionare ed inviare solo il comic corrente. */

    $comics = config('comics');
    $open_comics = collect($comics['comics']);
    // dd($prova);
    // ricorda che tu hai modificato l'array in config dandogli un nome!
    $current_comic = $open_comics->where('id', $id)->first();
    // dd($current_comic);

    if (!$current_comic) {
        return abort(404);
    }

    $data = [
        'comics' => $current_comic
    ];
    return view('single-movie', $data);
})->name('single-movie');