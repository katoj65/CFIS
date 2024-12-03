<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Gases\GasesController;
use App\Http\Controllers\Charts\EmissionTargetChart;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test',[GasesController::class,'getGasesAPi']);


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
Route::get('/charts/emission-target/{from}/{to}/{name}', [EmissionTargetChart::class, 'get_emission_target'])->name('emission.target');





});