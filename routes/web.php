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

    return view('home', compact('cards'));
})->name('home');


Route::get('/card/{id}', function($id) {

    $cards = config('db_comics');
    
    
    if(is_numeric($id) && $id >= 0 && $id < count($cards)){
        $card = $cards[$id];
        return view('card_ActionComics', compact('cards','id','card'));
    } else {
        abort(404);
    }   

    
})->name('one_card');



