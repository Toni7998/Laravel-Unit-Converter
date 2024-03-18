<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertWeightController extends Controller
{
    public function convert($value, $unit)
    {
        switch ($unit) {
            case 'kilograms_to_pounds':
                return response()->json(['result' => $value * 2.20462]); // 1 kilogram = 2.20462 pounds
            case 'pounds_to_kilograms':
                return response()->json(['result' => $value / 2.20462]);
            default:
                return response()->json(['error' => 'Invalid unit provided'], 400);
        }
    }
}