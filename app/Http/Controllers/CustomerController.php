<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;    // for interacting with the DB

class CustomerController extends Controller
{
    //
    public function index() 
    {
        return view('customer');
    }

    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());

        $customer = new Customer();
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->city = $request['city'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->points = $request['points'];
        $customer->save();

        return redirect('customer/view');
    }

    public function view() 
    {
        $customersview = Customer::all();
        // echo "<pre>";
        // print_r($customersview->toArray());
        // echo "</pre>";
        // die; // so that page doesnt go forward

        $data = compact('customersview');
        return view('customer-view')->with($data);
    }

    public function delete($id)
    {   
        echo "<pre>";
        print_r($id);
        $datadel = Customer::find($id);
        if(!is_null($datadel))
        {
            echo "<pre>";
            print_r($datadel->toArray());
            echo "</pre>";
            $datadel->delete();
        }
        return redirect('customer/view');
    }
}
