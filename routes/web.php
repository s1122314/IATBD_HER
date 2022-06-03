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

Route::middleware(["auth", "admin"])->group(function(){
    Route::get("/product/destroy", [\App\Http\Controllers\ProductController::class, "delete"]);
    Route::post("/products", [\App\Http\Controllers\ProductController::class, "destroy"]);
    Route::get('/user/{id}/block', [\App\Http\Controllers\UserController::class, 'block']);
    Route::get('/user/{id}/unblock', [\App\Http\Controllers\UserController::class, 'unblock']);

});

Route::middleware(["auth", "gast"])->group(function(){
    Route::get("/product/{id}/order", [\App\Http\Controllers\ProductController::class, "order"]);
    Route::post("/ordered", [\App\Http\Controllers\ProductController::class, "ordered"]);
    Route::get("/product/review", [\App\Http\Controllers\ReviewController::class, "index"]);
    Route::get("/user/{id}/create", [\App\Http\Controllers\ReviewController::class, "create"]);
    Route::post("/user", [\App\Http\Controllers\ReviewController::class, "store"]);
    Route::get("/user", [\App\Http\Controllers\UserController::class, "index"]);
    Route::get("/user/{id}", [\App\Http\Controllers\UserController::class, "show"]);
    Route::get("/user/{id}/products", [\App\Http\Controllers\UserController::class, "userProducts"]);

    Route::get("/product/create", [\App\Http\Controllers\ProductController::class, "create"]);
    Route::post("/product", [\App\Http\Controllers\ProductController::class, "store"]);

    Route::get('image-upload', [ \App\Http\Controllers\ImageUploadController::class, 'imageUpload' ])->name('image.upload');
    Route::post('image-upload', [ \App\Http\Controllers\ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');

    Route::get("/", [\App\Http\Controllers\ProductController::class, "index"]);
    Route::get("/product", [\App\Http\Controllers\ProductController::class, "index"]);
    Route::get("/product/{id}", [\App\Http\Controllers\ProductController::class, "show"]);
});

    Route::get("/blocked", [\App\Http\Controllers\UserController::class, "blocked"]);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
