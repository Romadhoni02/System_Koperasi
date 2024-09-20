<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\PerjanjianPinjamanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaporanPinjamanController;
use App\Http\Controllers\AngsuranController;
use App\Http\Controllers\LaporanAngsuranController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PinjamanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Pattern untuk {id} harus berupa angka
Route::pattern('id', '[0-9]+');

// Route untuk login dan logout
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postlogin']);
Route::get('logout', [AuthController::class, 'logout']);

// Route utama setelah login
Route::get('/', function () {
    // Cek apakah user sudah login
    if (!Auth::check()) {
        return redirect('login');
    }
    // Tampilkan halaman utama dengan template AdminLTE
    return view('welcome');  // Ganti dengan view utama jika berbeda
});

// Route yang membutuhkan login
Route::middleware(['auth'])->group(function() {
    // Halaman utama
    Route::get('/', [WelcomeController::class,'index']);

    // Route untuk Data Pengguna (Users dan Members)
    Route::group(['prefix' => 'users'], function() {
        Route::get('/', [UsersController::class, 'index'])->name('users.index');             // Halaman awal Data User
        Route::post('/list', [UsersController::class, 'list'])->name('users.list');         // List Data User (json untuk datatables)
        Route::get('/create', [UsersController::class, 'create'])->name('users.create');    // Form create Data User
        Route::post('/', [UsersController::class, 'store'])->name('users.store');           // Simpan Data User
        Route::get('/{id}', [UsersController::class, 'show'])->name('users.show');          // Detail Data User
        Route::get('/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');     // Form edit Data User
        Route::put('/{id}', [UsersController::class, 'update'])->name('users.update');      // Update Data User
        Route::delete('/{id}', [UsersController::class, 'destroy'])->name('users.destroy'); // Hapus Data User
    });


    Route::group(['prefix' => 'members'], function() {
        Route::get('/', [MembersController::class, 'index'])->name('members.index');
        Route::get('/create', [MembersController::class, 'create'])->name('members.create');
        Route::post('/', [MembersController::class, 'store'])->name('members.store');
        Route::get('/{id}', [MembersController::class, 'show'])->name('members.show');
        Route::get('/{id}/edit', [MembersController::class, 'edit'])->name('members.edit');
        Route::put('/{id}', [MembersController::class, 'update'])->name('members.update');
        Route::delete('/{id}', [MembersController::class, 'destroy'])->name('members.destroy');
    });


    // Route untuk Data Transaksi (Pinjaman dan Perjanjian Pinjaman)
    Route::group(['prefix' => 'pinjaman'], function() {
        Route::get('/', [PinjamanController::class, 'index'])->name('pinjamans.index'); // Route untuk list pinjaman
        Route::get('/create', [PinjamanController::class, 'create'])->name('pinjamans.create'); // Form untuk create
        Route::post('/', [PinjamanController::class, 'store'])->name('pinjamans.store'); // Menyimpan pinjaman baru
        Route::get('/{id}', [PinjamanController::class, 'show'])->name('pinjamans.show'); // Menampilkan detail pinjaman
        Route::get('/{id}/edit', [PinjamanController::class, 'edit'])->name('pinjamans.edit'); // Form edit pinjaman
        Route::put('/{id}', [PinjamanController::class, 'update'])->name('pinjamans.update'); // Mengupdate pinjaman
        Route::delete('/{id}', [PinjamanController::class, 'destroy'])->name('pinjamans.destroy'); // Menghapus pinjaman
    });

    Route::group(['prefix' => 'perjanjian'], function() {
        Route::get('/', [PerjanjianPinjamanController::class, 'index'])->name('perjanjian.index');   // Halaman awal Perjanjian Pinjaman
        Route::post('/list', [PerjanjianPinjamanController::class, 'list'])->name('perjanjian.list');  // List Perjanjian Pinjaman (untuk datatables)
        Route::get('/create', [PerjanjianPinjamanController::class, 'create'])->name('perjanjian.create'); // Form create Perjanjian Pinjaman
        Route::post('/', [PerjanjianPinjamanController::class, 'store'])->name('perjanjian.store');   // Simpan Perjanjian Pinjaman
        Route::get('/{id}', [PerjanjianPinjamanController::class, 'show'])->name('perjanjian.show');  // Detail Perjanjian Pinjaman
        Route::get('/{id}/edit', [PerjanjianPinjamanController::class, 'edit'])->name('perjanjian.edit'); // Form edit Perjanjian Pinjaman
        Route::put('/{id}', [PerjanjianPinjamanController::class, 'update'])->name('perjanjian.update'); // Update Perjanjian Pinjaman
        Route::delete('/{id}', [PerjanjianPinjamanController::class, 'destroy'])->name('perjanjian.destroy'); // Hapus Perjanjian
        Route::get('/laporans/pdf', [PerjanjianPinjamanController::class, 'generatePDF'])->name('perjanjian.pdf');


    });

    // Route untuk Data Laporan (Laporan Pinjaman dan Laporan Angsuran)
    Route::group(['prefix' => 'laporans'], function() {
        Route::get('/', [LaporanPinjamanController::class, 'index'])->name('laporans.index');
        Route::post('/list', [LaporanPinjamanController::class, 'list'])->name('laporans.list');
        Route::get('/create', [LaporanPinjamanController::class, 'create'])->name('laporans.create');
        Route::post('/', [LaporanPinjamanController::class, 'store'])->name('laporans.store');
        Route::get('/{id}', [LaporanPinjamanController::class, 'show'])->name('laporans.show');
        Route::get('/{id}/edit', [LaporanPinjamanController::class, 'edit'])->name('laporans.edit');
        Route::put('/{id}', [LaporanPinjamanController::class, 'update'])->name('laporans.update');
        Route::delete('/{id}', [LaporanPinjamanController::class, 'destroy'])->name('laporans.destroy');
        Route::get('/laporans/pdf', [LaporanPinjamanController::class, 'generatePDF'])->name('laporans.pdf');

    });


    Route::group(['prefix' => 'laporanA'], function() {
        Route::get('/', [LaporanAngsuranController::class, 'index'])->name('laporanA.index');
        Route::post('/list', [LaporanAngsuranController::class, 'list'])->name('laporanA.list');
        Route::get('/create', [LaporanAngsuranController::class, 'create'])->name('laporanA.create');
        Route::post('/', [LaporanAngsuranController::class, 'store'])->name('laporanA.store');
        Route::get('/{id}', [LaporanAngsuranController::class, 'show'])->name('laporanA.show');
        Route::get('/{id}/edit', [LaporanAngsuranController::class, 'edit'])->name('laporanA.edit');
        Route::put('/{id}', [LaporanAngsuranController::class, 'update'])->name('laporanA.update');
        Route::delete('/{id}', [LaporanAngsuranController::class, 'destroy'])->name('laporanA.destroy');
        Route::get('/laporans/pdf', [LaporanAngsuranController::class, 'generatePDF'])->name('laporanA.pdf');

    });


    // Route untuk Data Angsuran
    Route::group(['prefix' => 'angsuran'], function() {
        Route::get('/', [AngsuranController::class, 'index'])->name('anggaran.index');
        Route::post('/list', [AngsuranController::class, 'list'])->name('anggaran.list');
        Route::get('/create', [AngsuranController::class, 'create'])->name('anggaran.create');
        Route::post('/', [AngsuranController::class, 'store'])->name('anggaran.store');
        Route::get('/{id}', [AngsuranController::class, 'show'])->name('anggaran.show');
        Route::get('/{id}/edit', [AngsuranController::class, 'edit'])->name('anggaran.edit');
        Route::put('/{id}', [AngsuranController::class, 'update'])->name('anggaran.update');
        Route::delete('/{id}', [AngsuranController::class, 'destroy'])->name('anggaran.destroy');
    });

});