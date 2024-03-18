<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/convert/length/{value}/{unit}', [ConvertLengthController::class, 'convert']);
Route::get('/convert/weight/{value}/{unit}', [ConvertWeightController::class, 'convert']);
Route::get('/convert/temperature/{value}/{unit}', [ConvertTemperatureController::class, 'convert']);
Route::get('/convert/volume/{value}/{unit}', [ConvertVolumeController::class, 'convert']);
Route::get('/convert/speed/{value}/{unit}', [ConvertSpeedController::class, 'convert']);