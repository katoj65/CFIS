<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KnowledgeCenter\KnowledgeCenterController;














//routes
Route::get('hub', [KnowledgeCenterController::class, 'index'])->name('hub');




// Route::get('hub/', function(){
// return('some information');
// });












































?>