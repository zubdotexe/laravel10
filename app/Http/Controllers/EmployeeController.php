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

    public function edit(Employee $employee)
    {
        // dd($emp);
        return view('employees.edit', ['employee' => $employee]);
    }

    public function update(Employee $employee, Request $request)
    {
        $emp = Employee::where('employee_id', $employee->employee_id)->first();

        $emp->name = $request['name'];
        $emp->role = $request['role'];
        $emp->email = $request['email'];
        $emp->salary = $request['salary'];

        $emp->save();

        return redirect(route('employees.index'));
    }

    public function destroy(Employee $employee)
    {
        // $delData = Employee::find($employee->employee_id);

        if(!is_null($employee))
        {
            $employee->delete();
        }

        return redirect(route('employees.index'));
    }
}
