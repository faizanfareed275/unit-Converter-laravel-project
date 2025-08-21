<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class converterController extends Controller
{

    public function showForm(Request $request){
        return view('index');
    }

    public function UnitConversion(Request $request){

        $request->validate([
            'value' => 'numeric|required',
            'conversion' => 'required',
        ]);

        $input = $request->value;
        $conversion = $request->conversion;
        $result = Null;

        Switch($conversion){
            case'km_to_miles':
                $result = $input *  0.621371;
                break;
            case'miles_to_km':
                $result = $input /  0.621371;
                break;
             case 'c_to_f':
                $result = ($input * 9/5) + 32;
                break;
            case 'f_to_c':
                $result = ($input - 32) * 5/9;
                break;
        }

        return view('index', compact('result','input', 'conversion'));

    } 
} 
