<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\guestcontroller;
use App\Http\Controllers\authController;

use App\Http\Controllers\barangController;
use App\Http\Controllers\kasirController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\PelanggganController;

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

//GUEST (SEBELUM LOGIN)
Route::middleware(['guest:kasir'])->group(function () {
    route::get('/kasir',function(){return view('login.kasir');});
    route::post('/loginkasir',[AuthController::class,'loginkasir']);
});
route::middleware(['guest:admin'])->group(function(){
    route::get('/admin',function() {return view('auth.loginadmin');})->name('loginadmin');
    route::post('/loginadmin',[Authcontroller::class,'loginadmin']);
});

//GUEST (SETELAH LOGIN)
route::middleware(['auth:kasir'])->group(function (){
    route::get('/kasir/dashboard',[DashboardkasirController::class, 'dashboard']);
    route::get('/kasir/logout',[AuthController::class, 'logoutkasir']);
});

route::middleware(['auth:admin'])->group(function(){
    route::get('/admin/dashboard',[DashboardAdminController::class, 'dashboard']);
    route::get('/admin/logout',[AuthController::class, 'logoutadmin']);


Route::resource('barang', BarangController::class);
Route::resource('kasir', KasirController::class);

Route::resource('transaksi', TransaksiController::class);
Route::resource('pelanggan', PelangganController::class);

});
