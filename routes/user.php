<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
Route::get('home/', [UserController::class, 'index'])->name('user.index');








});





















?>