<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mathCalcController extends Controller
{
    public function squared(Request $request)
    {
        $number = $request->input('number');
        $result = pow($number,2);
        return $result;
    }

    public function cubic(Request $request)
    {
        $number = $request->input('number');
        $result = pow($number,3);
        return $result;
    }

    public function area_circle(Request $request)
    {
        $radius = $request->input('number');
        $area= 3.14*($radius*$radius);
        $result = $area;
        return $result;
    }
}
