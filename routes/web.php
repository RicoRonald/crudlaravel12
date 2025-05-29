<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route CRUD
Route::get('/pegawai', [PegawaiController::class, 'index']);

//route CRUD Tambah Pegawai
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);

//route CRUD Pegawai --> store
Route::post('/pegawai/store', [PegawaiController::class, 'store']);

//route CRUD Edit Pegawai
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);

//route CRUD Update Pegawai 
Route::post('/pegawai/update', [PegawaiController::class, 'update']);

//route CRUD Hapus Pegawai
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);