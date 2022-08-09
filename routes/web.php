<?php

use App\Http\Controllers\CampeonatosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/campeonatos/criar', [CampeonatosController::class, 'store']);

Route::get('/campeonatos/quartas', [CampeonatosController::class, 'create']);

Route::get('/campeonatos/semifinais', function () {
    return view('campeonatos.semifinal');
});

Route::get('/campeonatos/final', function () {
    return view('campeonatos.final');
});
