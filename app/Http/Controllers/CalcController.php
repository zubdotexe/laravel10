<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

class CalcController extends Controller
{
    //
    public function totalSal()
    {
        $totalSal = Employee::sum('salary');
        // print_r($totalSal);
        return view('calc')->with('salary', $totalSal);
    }
}
