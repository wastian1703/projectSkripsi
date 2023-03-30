<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\data_barang_controller;
use App\Http\Controllers\data_barang_controller;
use App\Http\Controllers\data_servis_controller;
use App\Http\Controllers\data_teknisi_controller;
use App\Http\Controllers\data_pelanggan_controller;
use App\Http\Controllers\data_anggota_controller;
use App\Http\Controllers\data_booking_controller;
use App\Http\Controllers\data_sewa_controller;
use App\Http\Controllers\laporan_data_servis_controller;
use App\Http\Controllers\laporan_data_pelanggan_controller;

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

Route::get('/home',function(){
    return view("home");
});
Route::get('/admin',function(){
    return view("Ddas");
});
Route::get('/admin/data_barang',[data_barang_controller::class,  'index']);
Route::get('/admin/data_servis',[data_servis_controller::class,  'index']);
Route::get('/admin/data_teknisi',[data_teknisi_controller::class,  'index']);
Route::get('/admin/data_pelanggan',[data_pelanggan_controller::class,  'index']);
Route::get('/admin/data_anggota',[data_anggota_controller::class,  'index']);
Route::get('/admin/data_booking',[data_booking_controller::class,  'index']);
Route::get('/admin/data_sewa',[data_sewa_controller::class,  'index']);
Route::get('/admin/laporan_data_servis',[laporan_data_servis_controller::class,  'index']);
Route::get('/admin/laporan_data_pelanggan',[laporan_data_pelanggan_controller::class,  'index']);

// Route::get('{id}/edit_data_aggota', 'data_anggotaController@edit');
// Route::get('update_data_aggota/{id}', 'data_anggotaController@update');

Route::get('/user',function(){
    return view("user.index");
});

Route::get('/teknisi',function(){
    return view("teknisi.index");
});