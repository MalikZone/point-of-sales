<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('layouts.layout')->name('home');
// });

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login-proses', [AuthController::class, 'loginProses'])->name('login-proses');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home')->middleware(['cek_login:administrator,inventory,kasir']);
    Route::get('/product', [ProductController::class, 'index'])->name('product')->middleware(['cek_login:administrator,inventory']);


    Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier')->middleware(['cek_login:administrator,inventory']);
    Route::get('/supplier/fetch-data-supplier', [SupplierController::class, 'fetchData'])->name('fetch-supplier')->middleware(['cek_login:administrator,inventory']);
    Route::get('/supplier/fetch-data-supplier/{id}', [SupplierController::class, 'detailSupplier'])->name('detail-supplier')->middleware(['cek_login:administrator,inventory']);
    Route::post('/supplier/save-prosess/{id?}', [SupplierController::class, 'store'])->name('supplier-save-prosess')->middleware(['cek_login:administrator,inventory']);
});
