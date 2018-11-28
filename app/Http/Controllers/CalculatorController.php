<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function getState(Request $request){
        return view('v1/partials/finite-automate/'. $request->state);
    }
}
