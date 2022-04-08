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
Route::get("/drinks", [App\Http\Controllers\DrinksController::class, "index"]);


Route::get("/sushi", [\App\Http\Controllers\SushiController::class, "index"])->middleware(['auth']);
Route::get("/sushi/{id}", [\App\Http\Controllers\SushiController::class, "show"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get("/", [\App\Http\Controllers\SushiController::class, "index"]);
require __DIR__.'/auth.php';
