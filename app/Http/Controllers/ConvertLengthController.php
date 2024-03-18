<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertLengthController extends Controller
{
    public function convert($value, $unit)
    {
        switch ($unit) {
            case 'meters_to_feet':
                return response()->json(['result' => $value * 3.28084]); // 1 metro = 3.28084 pies
            case 'feet_to_meters':
                return response()->json(['result' => $value / 3.28084]);
            default:
                return response()->json(['error' => 'Invalid unit provided'], 400);
        }
    }
}