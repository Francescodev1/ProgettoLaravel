<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgettiController;
use App\Http\Controllers\AttivitaController;

Route::resource('progetti', ProgettiController::class);
Route::resource('attivitas', AttivitaController::class);
