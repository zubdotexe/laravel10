<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        $employeeList = Employee::all();
        $data = compact('employeeList');
        // return view('employees.index')->with($data);
        return view('employees.index', ['employeeList' => $employeeList]);
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        // dd($request);

        $storeEmp = new Employee();
        $storeEmp->name = $request['name'];
        $storeEmp->role = $request['role'];
        $storeEmp->email = $request['email'];
        $storeEmp->password = $request['password'];
        $storeEmp->salary = $request['salary'];

        $storeEmp->save();
        
        return redirect(route('employees.index'));
    }

    public function totalSal()
    {
        $totalSal = Employee::sum('salary');
        print_r($totalSal);
    }
}
