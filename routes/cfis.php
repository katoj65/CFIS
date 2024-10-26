<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CFIS\CFISController;








//routes
Route::get('cfis',[CFISController::class, 'index'])->name('cfis.overview');




// Route::get('hub/', function(){
// return('some information');
// });












































?>