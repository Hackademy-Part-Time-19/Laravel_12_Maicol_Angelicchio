<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('index');
})->name('index');

Route::middleware('auth')->group(function(){
    Route::resource('category', CategoryController::class);
    Route::resource('article', ArticleController::class);
    Route::get('/byCategory/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');
});