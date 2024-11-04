<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\NewsController;


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

Route::get('admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('admin/news', [NewsController::class, 'index'])->name('admin.news');
Route::get('admin/news/create',[NewsController::class,'createNews'])->name('admin.news_create');
Route::post('admin/mews/store', [NewsController::class, 'store'])->name('news.store');
Route::get('admin/news/article/{id}',[NewsController::class,'show'])->name('admin.news_show');

});





















?>