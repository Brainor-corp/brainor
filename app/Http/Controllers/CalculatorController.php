<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function getFinite(Request $request){
        $state = $request->finite;
        return view('v1/partials/finite automate/'. $state);
    }
}
