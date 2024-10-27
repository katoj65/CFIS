<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Microfinance\MicrofinanceController;



Route::get('fund',[MicrofinanceController::class,'index'])->name('microfinance.overview');
















































?>