<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaundryController;
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

Route::get('/', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/pilih-paket', [LaundryController::class, 'paket'])->name('paket');
Route::get('/input-kasir/{paket}', [LaundryController::class, 'kasir'])->name('kasir');
Route::post('/konfirmasi-pesanan', [LaundryController::class, 'pesanan'])->name('pesanan');
Route::get('/invoice/{id}', [LaundryController::class, 'invoice'])->name('invoice');
// Route::get('/generate-pdf', [LaundryController::class, 'generatePDF'])->name('generatePDF');
Route::get('/search-customers', [LaundryController::class, 'searchCustomers']);

