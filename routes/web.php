<?php

use App\Http\Controllers\TimesController;
use App\Http\Controllers\CampeonatosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/times/criar', [TimesController::class, 'store']);
Route::post('/campeonatos/criar', [CampeonatosController::class, 'store']);
Route::get('/campeonatos/quartas', [CampeonatosController::class, 'create']);
Route::get('/campeonatos/semifinal', [CampeonatosController::class, 'create']);
Route::get('/campeonatos/finalfinal', [CampeonatosController::class, 'create']);
