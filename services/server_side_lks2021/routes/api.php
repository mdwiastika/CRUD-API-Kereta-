<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\DriverController;
use App\Http\Controllers\API\LineController;
use App\Http\Controllers\API\StationController;
use App\Http\Controllers\API\VehicleController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::resource('/line', LineController::class);
    Route::resource('/station', StationController::class);
    Route::resource('/driver', DriverController::class);
    Route::resource('/vehicle', VehicleController::class);
    Route::post('/logout', [AuthController::class, 'logout']);
});
