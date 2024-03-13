<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $series = config('series');

    return view('home', compact('series'));
})->name('home');

Route::get('/products/{index}', function ($index) {
    $series = config('series');

    if(!is_numeric($index) || $index < 0 || $index >= count($series)){
        abort(404);
    }

    return view('products.product', ['product' => $series[$index]]);
})->name('product');
