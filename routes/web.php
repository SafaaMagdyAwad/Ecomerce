<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',[PublicController::class,'index'])->name('index');
Route::get('cart',[PublicController::class,'cart'])->name('cart');
Route::get('checkout',[PublicController::class,'checkout'])->name('checkout');
Route::post('contact',[PublicController::class,'contact'])->name('contact');
