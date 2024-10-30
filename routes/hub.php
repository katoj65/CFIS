<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hub\HubController;







//routes
Route::get('hub', [HubController::class, 'index'])->name('hub');




// Route::get('hub/', function(){
// return('some information');
// });












































?>