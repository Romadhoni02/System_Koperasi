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
            'manajemen pengguna' => 2,
            'data member' => 2,
            'tabunganSaldo' => 375000,
            'tabunganDebit' => 450000,
            'tabunganKredit' => 75000,
            'transaksiKredit' => 2,
            'uangKreditAdmin' => 28000,
            'uangKreditBelumBayar' => 151800,
        ];
        
        return view('dashboard', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu, 'data' => $data]);
    }
}
