<?php

use App\Http\Controllers\EgencyBikeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[EgencyBikeController::class,'index'])->name('index');
Route::get('/create',[EgencyBikeController::class,'create'])->name('create');
Route::post('/add',[EgencyBikeController::class,'store'])->name('store');
Route::get('/edit/{id}',[EgencyBikeController::class,'edit'])->name('edit');
Route::post('/edit/{id}',[EgencyBikeController::class,'update'])->name('update');
Route::get('/delete/{id}',[EgencyBikeController::class,'destroy'])->name('delete');
Route::post('/search',[EgencyBikeController::class,'search'])->name('search');
