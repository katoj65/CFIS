<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\NewsController;


Route::get('admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('admin/news', [NewsController::class, 'index'])->name('admin.news');

























?>