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
Route::get('user/calculator/emission/energy-consumption/{id}', [UserCalculator::class, 'hydropowerUsage'])->name('user.hydropower_usage');
Route::get('user/emission/summary', [UserController::class, 'emissionSummary'])->name('user.emission_summary');
Route::get('user/calculator/transport', [UserController::class, 'trasportPage'])->name('user.transport_page');
Route::post('user/form/transport', [UserController::class, 'transportFormRequest'])->name('user.form_transport');

Route::get('user/calculator/transport/petrol', [UserController::class, 'transportForm'])->name('calculator.transport_fuel');
Route::get('user/calculator/transport/diesel', [UserController::class, 'transportForm'])->name('calculator.transport_fuel');
Route::get('user/calculator/transport/electricity', [UserController::class, 'transportForm'])->name('calculator.transport_fuel');

Route::get('user/calculator/emission/transportation/{id}', [UserController::class, 'transportationPage'])->name('emission.transportation');
























});





















?>