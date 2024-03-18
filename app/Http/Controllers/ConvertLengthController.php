<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertLengthController extends Controller
{
    public function convert($value, $unit)
    {
        switch ($unit) {
            case 'meters_to_feet':
                $result = $value * 3.28084; // 1 metro = 3.28084 pies
                break;
            case 'feet_to_meters':
                $result = $value / 3.28084;
                break;
            default:
                $result = 'Invalid unit provided';
                break;
        }

        return response()->json(['result' => $result]);
    }
}

