<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\CarbonMarketController;
use App\Http\Controllers\Admin\AdministrationUnitController;


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

Route::get('admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('admin/news', [NewsController::class, 'index'])->name('admin.news');
Route::get('admin/news/create',[NewsController::class,'createNews'])->name('admin.news_create');
Route::post('admin/mews/store', [NewsController::class, 'store'])->name('news.store');
Route::get('admin/news/article/{id}',[NewsController::class,'show'])->name('admin.news_show');
Route::get('admin/carbon-market',[CarbonMarketController::class,'index'])->name('market.index');
Route::get('admin/administration-units', [AdministrationUnitController::class, 'index'])->name('administration.units');
});
Route::get('admin/districts/create',[AdministrationUnitController::class,'createDistrict'])->name('districts.create');
Route::post('admin/district/stiore',[AdministrationUnitController::class,'storeDistrict'])->name('district.store');
Route::get('admin/district/{id}',[AdministrationUnitController::class,'show'])->name('district.show');
Route::get('admin/district/{id}/edit',[AdministrationUnitController::class,'edit'])->name('district.edit');
Route::put('admin/district/{id}',[AdministrationUnitController::class,'update'])->name('district.update');



















?>