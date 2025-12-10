<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/vcard-personal-portfolio', [PortfolioController::class, 'index'])->name('vcard');
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
