<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!1
|
*/

Route::name('categories.')->prefix('categories')->group(function() {
    Route::get('', [CategoryController::class, 'index'])->name('index');
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
});

Route::name('products.')->prefix('products')->group(function() {
    Route::get('', [ProductController::class, 'index'])->name('index');
    Route::get('{id}', [ProductController::class, 'show'])->name('show');
    Route::get('/featured/index', [ProductController::class, 'featured'])->name('featured');
});

Route::name('cart.')->prefix('cart')->group(function() {
    Route::get('', [CartController::class, 'index'])->name('index');
    Route::get('/savedForLater', [CartController::class, 'savedForLater'])->name('savedForLater');
    Route::post('addItem', [CartController::class, 'store'])->name('store');
});

Route::name('cart-item.')->prefix('cartItem')->group(function() {
    Route::put('{id}', [CartItemController::class, 'update'])->name('update');
    Route::delete('{id}', [CartItemController::class, 'destroy'])->name('delete');
    Route::get('{id}/savedForLater', [CartItemController::class, 'saveForLater'])->name('saveForLater');
});

Route::name('reviews.')->prefix('products')->group(function() {
    Route::get('{id}/reviews', [ReviewController::class, 'index'])->name('index');
});

Route::name('comments.')->prefix('reviews')->group(function() {
    Route::get('{id}/comments', [CommentController::class, 'index'])->name('index');
});

Route::name('sub-categories.')->prefix('subCategories')->group(function() {
    Route::get('/products/{name}', [SubCategoryController::class, 'products'])->name('products');
});