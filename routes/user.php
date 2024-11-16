<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Calculator\UserCalculator;

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
Route::get('home/', [UserController::class, 'index'])->name('user.index');
Route::get('user/calculator/energy', [UserCalculator::class, 'energyCalculatorPage'])->name('user.energy_calculator');








});





















?>