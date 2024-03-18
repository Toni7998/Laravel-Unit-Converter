<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertSpeedController extends Controller
{
    public function convert($value, $unit)
    {
        switch ($unit) {
            case 'kilometers_per_hour_to_miles_per_hour':
                $result = $value * 0.621371; // 1 kilometer per hour = 0.621371 miles per hour
                break;
            case 'miles_per_hour_to_kilometers_per_hour':
                $result = $value / 0.621371;
                break;
            default:
                $result = 'Invalid unit provided';
                break;
        }

        return response()->json(['result' => $result]);
    }
}
