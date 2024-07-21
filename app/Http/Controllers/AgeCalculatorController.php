<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeCalculatorController extends Controller
{
    public function index(){
        return view('age_calculator');
    }
    public function calc_age(Request $request){
        $request->validate([
            'date'=>'required|date'
        ]);
        $date = new \DateTime($request->input('date'));
        $current = new \DateTime();
        $age = $current->diff($date)->y;

        return view('age_calculator', ['age' => $age]);


    }
}
