<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Market\CarbonMarketController;









//routes
Route::get('carbon-market',[CarbonMarketController::class, 'index'])->name('market.overview');




// Route::get('hub/', function(){
// return('some information');
// });












































?>