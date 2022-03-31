<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\NotesController;
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

Route::resource('/customer', CustomerController::class);
Route::resource('/manufacture', ManufactureController::class);
Route::resource('/equipment', EquipmentController::class);
Route::resource('/purchases', PurchasesController::class);
Route::resource('/notes', NotesController::class);

Route::delete('/purchases/{purchasesID}/{itemID}', [PurchasesController::class, 'deleteItem'])->name('equipment.deleteItem');
Route::post('/purchases/{purchasesID}/{itemID}', [PurchasesController::class, 'addItem'])->name('equipment.addItem');

URL::forceScheme('https');


Route::get('/db-migrate', function () {
    Artisan::call('migrate');
    echo Artisan::output();
});

Route::get('/db-test', function () {
    try {         
         echo \DB::connection()->getDatabaseName();     
    } catch (\Exception $e) {
          echo 'None';
    }
});


Route::get('/', function () {
    return view('welcome');
});
