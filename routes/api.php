<?php

use App\Http\Controllers\ConvertLengthController;
use App\Http\Controllers\ConvertWeightController;
use App\Http\Controllers\ConvertTemperatureController;
use App\Http\Controllers\ConvertVolumeController;
use App\Http\Controllers\ConvertSpeedController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and assigned to the "api" 
| middleware group. Enjoy building your API!
|
*/

Route::prefix('convert')->group(function () {
    Route::get('/length/{value}/{unit}', [ConvertLengthController::class, 'convert']);
    Route::get('/weight/{value}/{unit}', [ConvertWeightController::class, 'convert']);
    Route::get('/temperature/{value}/{unit}', [ConvertTemperatureController::class, 'convert']);
    Route::get('/volume/{value}/{unit}', [ConvertVolumeController::class, 'convert']);
    Route::get('/speed/{value}/{unit}', [ConvertSpeedController::class, 'convert']);
});