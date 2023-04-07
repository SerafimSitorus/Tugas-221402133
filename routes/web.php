<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

use App\Http\COntrollers\MahasiswaController;

Route::get('daftar_mahasiswa', [MahasiswaController::class, 'index']);

Route::post('/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);
Route::get('/detail_mahasiswa/daftar_kekayaan', [MahasiswaController::class, 'daftar_kekayaan']);
// Route::get('/daftar_mahasiswa', 'App\Http\COntrollers\MahasiswaController@index');

// Route::match(['get', 'post'], '/detail_mahasiswa',
//     [MahasiswaController::class, 'detail_mahasiswa']
// );

Route::view('/daftar_mahasiswa', 'daftar_mahasiswa');
Route::get('/admin/dasboard', [AdminController::class, 'index']);
Route::get('/admin/postingan', [AdminController::class, 'show_postingan']);
Route::get('/admin/profil', [AdminController::class, 'show_profil']);
Route::get('/admin/beritaterkini', [AdminController::class, 'show_beritaterkini']);
Route::get('/admin/todolist', [AdminController::class, 'show_todolist']);
Route::get('/admin/randomshits', [AdminController::class, 'show_randomshits']);