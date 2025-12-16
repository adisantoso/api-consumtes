<?php
use App\Http\Controllers\Api\Auth\{
    RegisterController,
    LoginController,
    LogoutController,
    PasswordController
};
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

// Test Connection
Route::get('/ping', function () {
    return response()->json([
        'message' => 'Server is running, happy coding :) !',
    ]);
});

Route::post('/register', RegisterController::class);
Route::post('/login', LoginController::class);
Route::post('/forgot-password', [PasswordController::class, 'forgot']);
Route::post('/reset-password', [PasswordController::class, 'reset']);

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('products', ProductController::class);
    Route::post('logout', LogoutController::class);
});

