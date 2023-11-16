<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CreateCustomer;
use App\Livewire\Customers;
use App\Livewire\ViewCustomer;
use App\Livewire\EditCustomer;
use App\Livewire\Register;
use App\Livewire\Loging;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make som ething great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function(){
    Route::get('/customer/create',CreateCustomer::class)->name('create.customer');
    Route::get('/customers',Customers::class)->name('customers');
    Route::get('/customers/{customer}',ViewCustomer::class);
    Route::get('/customers/{customer}/edit',EditCustomer::class);
});


Route::get('/register',Register::class);
Route::get('/login',Loging::class);