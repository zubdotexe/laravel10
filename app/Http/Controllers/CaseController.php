<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cases;

class CaseController extends Controller
{
    //
    public function index()
    {
        $caseList = Cases::all();
        return view('cases.index', ['caseList' => $caseList]);
    }

    public function edit(Cases $case)
    {
        // dd($emp);
        return view('cases.edit', ['case' => $case]);
    }

    public function update(Cases $case, Request $request)
    {
        
        echo "<pre>";
        print_r($case);

        $updateCase = Cases::where('id', $case->id)->first();
        
        $updateCase->case_name = $request['case_name'];
        $updateCase->case_description = $request['case_description'];
        $updateCase->case_status = $request['case_status'];
        $updateCase->assigned_lawyer_id = $request['assigned_lawyer_id'];
        $updateCase->case_fees = $request['case_fees'];

        $updateCase->save();

        return redirect(route('cases.index'));
    }
}
