<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertVolumeController extends Controller
{
    public function convert($value, $unit)
    {
        switch ($unit) {
            case 'liters_to_gallons':
                return response()->json(['result' => $value * 0.264172]); // 1 liter = 0.264172 gallons
            case 'gallons_to_liters':
                return response()->json(['result' => $value / 0.264172]);
            default:
                return response()->json(['error' => 'Invalid unit provided'], 400);
        }
    }
}