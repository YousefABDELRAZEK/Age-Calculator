<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgeCalculatorController;

Route::get('/', [AgeCalculatorController::class, 'index']);
Route::post('/age', [AgeCalculatorController::class, 'calc_age'])->name('calc_age');


