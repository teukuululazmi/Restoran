<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//category
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::post('/categoryPost', [App\Http\Controllers\CategoryController::class, 'categoryPost'])->name('categoryPost');
Route::get('/categoryDelete/{id}', [App\Http\Controllers\CategoryController::class, 'categoryDelete'])->name('categoryDelete');
Route::patch('/categoryUpdate/{id}', [App\Http\Controllers\CategoryController::class, 'categoryUpdate'])->name('categoryUpdate');

//resep
Route::get('/resep', [App\Http\Controllers\ResepController::class, 'index'])->name('resep');
Route::post('/resepPost', [App\Http\Controllers\ResepController::class, 'resepPost'])->name('resepPost');
Route::get('/resepDelete/{id}', [App\Http\Controllers\ResepController::class, 'resepDelete'])->name('resepDelete');
Route::patch('/resepUpdate/{id}', [App\Http\Controllers\ResepController::class, 'resepUpdate'])->name('resepUpdate');