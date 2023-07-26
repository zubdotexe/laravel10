<?php

use Illuminate\Support\Facades\Route;

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

Route::get('demoview/{username}/{id?}', function($username, $id=null) {
    // echo $username." ";
    // echo $id;

    $data = compact('username', 'id');
    // print_r($data);
    return view('demoview')->with($data);
});