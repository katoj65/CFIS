<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Market\CarbonMarketController;
use App\Http\Controllers\Market\MarketController;






Route::get('carbon-market',[CarbonMarketController::class, 'index'])->name('market.overview');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
Route::get('market/carbon',[MarketController::class, 'index'])->name('market.carbon');






});



// Route::get('hub/', function(){
// return('some information');
// });












































?>