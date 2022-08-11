<?php

use App\Http\Controllers\CampeonatosController;
use App\Http\Controllers\TimesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::controller(CampeonatosController::class)->group(function () {
    Route::get('/campeonatos/quartas', 'create')->name('campeonatos.create');
    Route::post('/campeonatos/salvar', 'store')->name('campeonatos.store');
});

Route::controller(TimesController::class)->group(function () {
    Route::post('/times/salvar', 'create')->name('times.store');
});

Route::get('/campeonatos/semifinais', function () {
    return view('campeonatos.semifinal');
});
Route::get('/campeonatos/final', function () {
    return view('campeonatos.final');
});
