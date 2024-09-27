<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocaleController;

Route::get('/', function () {
    return view('index');
});


Route::get('lang/{locale}', [LocaleController::class, 'setLocale'])->name('lang');
