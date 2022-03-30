<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\InvoiceController;

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

Route::resource('/user', UserController::class);
Route::resource('/manufacturer', ManufacturerController::class);
Route::resource('/equipment', EquipmentController::class);
Route::resource('/invoice', InvoiceController::class);


Route::get('/', function () {
    return view('welcome');
});
