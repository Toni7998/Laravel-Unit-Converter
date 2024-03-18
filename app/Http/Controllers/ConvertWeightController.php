<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertWeightController extends Controller
{
    public function convert($value, $unit)
    {
        switch ($unit) {
            case 'kilograms_to_pounds':
                $result = $value * 2.20462; // 1 kilogram = 2.20462 pounds
                break;
            case 'pounds_to_kilograms':
                $result = $value / 2.20462;
                break;
            default:
                $result = 'Invalid unit provided';
                break;
        }

        return response()->json(['result' => $result]);
    }
}
