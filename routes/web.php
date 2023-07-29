<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\CustomerController;
// use App\Models\Customer;

use App\Http\Controllers\EmployeeController;

use App\Http\Controllers\CalcController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function() {
    echo "hello world";
});

Route::post('/test', function() {
    echo "testing";
});

Route::any('/test', function() {    # post or get jekono theke chole ashbe
    echo "testing";
});

// Route::get('/demoview', function() {
//     return view('demoview');
// }); 

// Route::get('demoview/{username}/{id?}', function($username, $id=null) {
//     // echo $username." ";
//     // echo $id;

//     $data = compact('username', 'id');
//     // print_r($data);
//     return view('demoview')->with($data);
// });

Route::get('/', [DemoController::class, 'index']);
Route::get('/demoview', [DemoController::class, 'index']);
Route::resource('photo', PhotoController::class);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);


// for model (customer)
// Route::get('/customer', function() {
//     $customer = Customer::all();
//     echo "<pre>";
//     print_r($customer->toArray());
// });


Route::get('/customer', [CustomerController::class, 'index']);
Route::post('/customer', [CustomerController::class, 'store']);
Route::get('/customer/view', [CustomerController::class, 'view']);

// Route::get('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
Route::get('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');    // this would be using named route



// here starts my proj
Route::get('/employee', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employee', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/calc', [CalcController::class, 'totalSal']);