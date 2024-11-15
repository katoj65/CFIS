<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Calculator\CalculatorController;








//routes

Route::get('calculator', [CalculatorController::class, 'index'])->name('calculator.index');

// Route::get('hub/', function(){
// return('some information');
// });












































?>