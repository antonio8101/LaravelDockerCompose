<?php

use Illuminate\Support\Facades\Log;
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

Route::get('/tryout',  function () {
   return "HelloWorld!";
});

if (url('') == "http://www.ecommerce-x.local"){

    Route::get('/name', function () {
        return "X";
    });

}

if (url('') == "http://www.ecommerce-a.local"){

    Route::get('/name', function () {
        return "A";
    });

}


