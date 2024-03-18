<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertTemperatureController extends Controller
{
    public function convert($value, $unit)
    {
        switch ($unit) {
            case 'celsius_to_fahrenheit':
                $result = ($value * 9 / 5) + 32;
                break;
            case 'fahrenheit_to_celsius':
                $result = ($value - 32) * 5 / 9;
                break;
            default:
                $result = 'Invalid unit provided';
                break;
        }

        return response()->json(['result' => $result]);
    }
}
