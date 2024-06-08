<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TemplateController;    
use App\Http\Controllers\CarController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RentalController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


route::get('/', function(){
    return view ('index');
});



Route::resource('car', CarController::class);
Route::resource('customer', CustomerController::class);
Route::resource('rental', RentalController::class);
Route::resource('payment', PaymentController::class);