<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Calculator\UserCalculator;

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
Route::get('home/', [UserController::class, 'index'])->name('user.index');
Route::get('user/calculator/energy', [UserCalculator::class, 'energyCalculatorPage'])->name('user.energy_calculator');
Route::post('user/calculator/form',[UserCalculator::class,'energyCalculatorForm'])->name('energy.form');
Route::get('user/calculator/energy/hydropower', [UserCalculator::class, 'hydropowerForm'])->name('user.hydropower');
Route::get('user/calculator/energy/hydropower/{id}', [UserCalculator::class, 'hydropowerUsage'])->name('user.hydropower_usage');


























});





















?>