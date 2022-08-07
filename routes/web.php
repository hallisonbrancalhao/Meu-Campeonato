<?php

use App\Http\Controllers\TimesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola', function () {
    echo "Olá mundo";
});

Route::get('/times', [TimesController::class, 'index']);
