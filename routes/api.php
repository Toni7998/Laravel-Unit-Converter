<?php

use App\Http\Controllers\ConvertLengthController;
use App\Http\Controllers\ConvertWeightController;
use App\Http\Controllers\ConvertTemperatureController;
use App\Http\Controllers\ConvertVolumeController;
use App\Http\Controllers\ConvertSpeedController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas API para tu aplicación. Estas
| rutas son cargadas por el RouteServiceProvider y asignadas al grupo
| de middleware "api". ¡Disfruta construyendo tu API!
|
*/

Route::prefix('convert')->group(function () {
    Route::get('/length/{value}/{unit}', [ConvertLengthController::class, 'convert']);
    Route::get('/weight/{value}/{unit}', [ConvertWeightController::class, 'convert']);
    Route::get('/temperature/{value}/{unit}', [ConvertTemperatureController::class, 'convert']);
    Route::get('/volume/{value}/{unit}', [ConvertVolumeController::class, 'convert']);
    Route::get('/speed/{value}/{unit}', [ConvertSpeedController::class, 'convert']);
});
