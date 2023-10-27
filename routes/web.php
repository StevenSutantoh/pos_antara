<?php

use App\Models\pelanggan;
use App\Models\supplier;
use App\Models\barang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\pelangganController;
use App\Http\Controllers\Admin\supplierController;
use App\Http\Controllers\Admin\barangController;


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

Route::resource ('admin/supplier', [supplierController::class, 'index']);
Route::resource ('admin/pelanggan', [pelangganController::class, 'index']);
Route::resource ('admin/barang', [barangController::class, 'index']);