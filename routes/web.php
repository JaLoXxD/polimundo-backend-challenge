<?php

use Illuminate\Support\Facades\Route;
//FOR PRODUCTS MODEL
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Products;
//FOR EMPLOYEES MODEL
use App\Http\Resources\EmployeeCollection;
use App\Http\Resources\EmployeeResource;
use App\Models\Employees;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function(){
    return new ProductCollection(Products::all());
});

Route::get('/products/{id}', function($id){
    return new ProductResource(Products::findOrFail($id));
});
Route::get('/employees', function(){
    return new EmployeeCollection(Employees::all());
});

Route::get('/employees/{id}', function($id){
    return new EmployeeResource(Employees::findOrFail($id));
});