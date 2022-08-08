<?php

use App\Http\Controllers\TimesController;
use App\Http\Controllers\CampeonatosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/times/criar', [TimesController::class, 'create']);
Route::post('/campeonatos/criar', [CampeonatosController::class, 'store']);
Route::get('/campeonatos/quartas', [CampeonatosController::class, 'create']);
