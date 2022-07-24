<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Add item
Route::post('/products', [ProductController::class, 'store']);

// Register route
Route::post('/register', [AuthController::class, 'register']);

// Login route
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function() {
    //Get all items
    Route::get('/products', [ProductController::class, 'index']);
    // Get one item from id
    Route::get('/products/{id}', [ProductController::class, 'show']);
    // Update item by id
    Route::put('/products/{id}', [ProductController::class, 'update']);
    // Delete item by id
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
    // Logout route
    Route::post('/logout', [AuthController::class, 'logout']);

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
