<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertTemperatureController extends Controller
{
    public function convert($value, $unit)
    {
        switch ($unit) {
            case 'celsius_to_fahrenheit':
                return response()->json(['result' => ($value * 9 / 5) + 32]);
            case 'fahrenheit_to_celsius':
                return response()->json(['result' => ($value - 32) * 5 / 9]);
            default:
                return response()->json(['error' => 'Invalid unit provided'], 400);
        }
    }
}