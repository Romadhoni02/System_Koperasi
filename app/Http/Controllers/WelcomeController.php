<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title'=> 'Sistem Koperasi',
            'list'=>['Home', 'Dashboard']
        ];
        $activeMenu = 'dashboard';
        
        // Simulasi data dari gambar
        $data = [
            'anggota' => 3,
            'itemProduk' => 4,
            'tabunganSaldo' => 375000,
            'tabunganDebit' => 450000,
            'tabunganKredit' => 75000,
            'transaksiKredit' => 2,
            'uangKreditAdmin' => 28000,
            'uangKreditBelumBayar' => 151800,
            'uangKreditAngsuran' => 1126200,
            'loginTerakhir' => '2023-10-17 10:48:09',
            'entriTerakhir' => '2023-10-17 10:47:57',
        ];
        
        return view('dashboard', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu, 'data' => $data]);
    }
}
