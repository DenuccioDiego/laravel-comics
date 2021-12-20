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

    $cards = config('db_comics');
    $item_menù = config('db_comics_header');

    return view('home', compact('cards', 'item_menù'));
})->name('HOME');


Route::get('/card/{id}', function($id) {

    $cards = config('db_comics');
    
    
    if(is_numeric($id) && $id >= 0 && $id < count($cards)){
        $card = $cards[$id];
        return view('card_ActionComics', compact('cards','id','card'));
    } else {
        abort(404);
    }   

    
})->name('one_card');




Route::get('/COMICS', function () {

    return view('COMICS');
})->name('COMICS');

Route::get('/MOVIES', function () {

    return view('MOVIES');
})->name('MOVIES');

Route::get('/TV', function () {

    return view('TV');
})->name('TV');

Route::get('/GAMES', function () {

    return view('GAMES');
})->name('GAMES');

Route::get('/COLLECTIBLES', function () {

    return view('COLLECTIBLES');
})->name('COLLECTIBLES');

Route::get('/VIDEOS', function () {

    return view('VIDEOS');
})->name('VIDEOS');

Route::get('/FANS', function () {

    return view('FANS');
})->name('FANS');

Route::get('/NEWS', function () {

    return view('NEWS');
})->name('NEWS');

Route::get('/SHOP', function () {

    return view('SHOP');
})->name('SHOP');










