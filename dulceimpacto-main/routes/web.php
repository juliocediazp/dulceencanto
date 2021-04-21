<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Shared
use App\Http\Controllers\Shared\PersonController;
use App\Http\Controllers\Shared\UserController;

// Client
use App\Http\Controllers\Client\HomeController;

// Dashboard
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\ProviderController;
use App\Http\Controllers\Dashboard\SaleController;
use App\Http\Controllers\Dashboard\UserController as UsersAdmin;
use App\Http\Controllers\Reports\PDFController;

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

//home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/nosotros', [HomeController::class, 'nosotros'])->name('home.nosotros');

//shared
Route::get('/perfil', [UserController::class, 'profile'])->name('user.profile');
Route::post('/change_password', [UserController::class, 'changePassword']);

//Crud
Route::resource('/persona', PersonController::class);
Route::resource('/productos', ProductController::class);
Route::resource('/proveedores', ProviderController::class);
Route::resource('/ventas', SaleController::class);
Route::resource('/usuarios', UsersAdmin::class);

//reports
Route::get('/users-pdf', [PDFController::class, 'generateUserPdf'])->name('users.pdf');
Route::get('/users-excel', [PDFController::class, 'generateUserExcel'])->name('users.excel');


Auth::routes();
