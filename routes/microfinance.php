<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Microfinance\MicrofinanceController;



Route::get('microfinance',[MicrofinanceController::class,'index'])->name('microfinance.overview');
















































?>