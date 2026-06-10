<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\nilaikuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

//Route untuk Menu Pertemuan 1 - 6
Route::get('menu', [MenuController::class, 'index']);
Route::get('idx', [MenuController::class, 'idx']);
Route::get('example', [MenuController::class, 'example']);
Route::get('int', [MenuController::class, 'int']);
Route::get('linktr', [MenuController::class, 'linktr']);
Route::get('berita1', [MenuController::class, 'berita1']);
Route::get('berita2', [MenuController::class, 'berita2']);
Route::get('pert4', [MenuController::class, 'pert4']);
Route::get('pert5', [MenuController::class, 'pert5']);
Route::get('respons', [MenuController::class, 'respons']);
Route::get('temp', [MenuController::class, 'temp']);

Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud tabel pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//crud tabel mobil
Route::get('/mobil', [MobilController::class, 'index']);
Route::get('/mobil/tambah', [MobilController::class, 'tambah']);
Route::post('/mobil/store', [MobilController::class, 'store']);
Route::get('/mobil/edit/{id}', [MobilController::class, 'edit']);
Route::post('/mobil/update', [MobilController::class, 'update']);
Route::get('/mobil/hapus/{id}', [MobilController::class, 'hapus']);
Route::get('/mobil/cari', [MobilController::class, 'cari']);

//crud tabel mobil
Route::get('/nilaikuliah', [nilaikuliahController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilaikuliah/tambah', [nilaikuliahController::class, 'tambah'])->name('nilaikuliah.create');
Route::post('/nilaikuliah/store', [nilaikuliahController::class, 'store'])->name('nilaikuliah.store');
