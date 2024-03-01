<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;

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

Route::get('/',  [UserController::class, 'DoLogin'])->name('dologin');

Route::get('register',[UserController::class,'RegistrationForm']);
Route::post('registerForm',[UserController::class,'CreateUser']);
Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');
Route::post('authenticate', [UserController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [UserController::class,'logout'])->name('logout');

Route::post('/createlist', [CustomerController::class,'InsertData'])->name('createlist');
Route::get('/create', [CustomerController::class,'Create'])->name('create');
Route::get('/list', [CustomerController::class,'CustomerList'])->name('list');
Route::get('Customer/edit/{id}', [CustomerController::class,'view'])->name('customer.edit');
Route::post('Customer/update/{id}', [CustomerController::class,'update'])->name('customer.update');
Route::delete('/castomer/{id}', [CustomerController::class,'delete'])->name('customer.delete');

Route::get('invoice/list', [InvoiceController::class,'InvoiceList'])->name('invoice.list');
Route::get('invoice/create', [InvoiceController::class,'InvoiceCreate'])->name('invoice.create');
Route::post('/insert',[InvoiceController::class,'InsertInvoice'])->name('create.insert');
Route::get('invoice/edit/{id}', [InvoiceController::class,'InvoiveView'])->name('invoice.edit');
Route::post('invoice/update/{id}', [InvoiceController::class,'update'])->name('invoice.update');
Route::delete('/invoice/{id}', [InvoiceController::class,'delete'])->name('invoice.delete');