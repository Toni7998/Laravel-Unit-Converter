<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertVolumeController extends Controller
{
    public function convert($value, $unit)
    {
        switch ($unit) {
            case 'liters_to_gallons':
                $result = $value * 0.264172; // 1 liter = 0.264172 gallons
                break;
            case 'gallons_to_liters':
                $result = $value / 0.264172;
                break;
            default:
                $result = 'Invalid unit provided';
                break;
        }

        return response()->json(['result' => $result]);
    }
}
