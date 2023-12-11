<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use APP\Http\Controllers\LikeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\BeautyController;
use App\Http\Controllers\OsusumeController;


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
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/', [ProductController::class, 'index']);
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews/store', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/products/{product}', [ProductController::class , 'show'])->name('products.show');
Route::get('/products/osusume', [SampleController::class, 'create']);
Route::get('/beautys/index', [BeautyController::class, 'index'])->name('beauty.index');
Route::get('/osusumes/index', [OsusumeController::class, 'index'])->name('osusume.index');

