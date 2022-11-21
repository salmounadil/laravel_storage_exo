<?php

use App\Http\Controllers\ImageController;
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

Route::get('/', [ImageController::class,'accueil'])->name('accueil');
Route::get('/administration', [ImageController::class,'administration'])->name('administration');
Route::get('/create', [ImageController::class,'create'])->name('create');
Route::post('/administration/store', [ImageController::class,'store'])->name('store');
Route::get('/show/{id}', [ImageController::class,'show'])->name('show');
Route::delete('/administration/delete/{id}', [ImageController::class,'delete'])->name('delete');
