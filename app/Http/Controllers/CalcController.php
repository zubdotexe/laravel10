<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use App\Models\Cases;

class CalcController extends Controller
{
    //
    public function totalSal()
    {
        $totalSal = Employee::sum('salary');
        $totalIncome = Cases::sum('case_fees');
        // print_r($totalSal);
        $cal = [$totalSal, $totalIncome];
        return view('calc')->with('cal', $cal);
    }
}
