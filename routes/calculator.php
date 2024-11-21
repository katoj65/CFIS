<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Calculator\CalculatorController;
use App\Http\Controllers\Calculator\EnergyCalculator;




//routes

Route::get('calculator', [CalculatorController::class, 'index'])->name('calculator.index');
Route::post('store/calculator/hydropower',[EnergyCalculator::class, 'storeHydropower'])->name('store.hydropower');
Route::delete('destroy/calculator/hydropower',[EnergyCalculator::class,'destroyHydropower'])->name('destroy.hydropower');
Route::put('hydropower/portifolio/create',[EnergyCalculator::class,'createEnergyPortifolio'])->name('portifolio.create');








































?>