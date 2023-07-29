<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index() 
    {
        return view('form');
    }

    public function register(request $request) 
    {
        
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required'
            ]
        );
        echo "<pre>";
        print_r($request->all());
    }
}
