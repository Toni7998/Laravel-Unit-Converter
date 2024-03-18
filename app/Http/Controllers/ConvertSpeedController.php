<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertSpeedController extends Controller
{
    public function convert($value, $unit)
    {
        switch ($unit) {
            case 'kilometers_per_hour_to_miles_per_hour':
                return response()->json(['result' => $value * 0.621371]); // 1 kilometer per hour = 0.621371 miles per hour
            case 'miles_per_hour_to_kilometers_per_hour':
                return response()->json(['result' => $value / 0.621371]);
            default:
                return response()->json(['error' => 'Invalid unit provided'], 400);
        }
    }
}