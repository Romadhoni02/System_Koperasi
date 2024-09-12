<?php

namespace App\Http\Controllers;

use App\Models\LaporanAngsuran;
use App\Models\LaporanAngsuranModel;
use Illuminate\Http\Request;

class LaporanAngsuranController extends Controller
{
    // Menampilkan daftar laporan angsuran
    public function index()
    {
        $laporanAs = LaporanAngsuranModel::all();
        return view('LaporanAngsuran.index', compact('laporanAs'));
    }

    // Menampilkan form create
    public function create()
    {
        return view('LaporanAngsuran.create');
    }

    // Menyimpan laporan angsuran baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'angsuran_id' => 'required|integer',
            'detail_laporan' => 'required|string',
        ]);

        LaporanAngsuranModel::create($validatedData);
        return redirect()->route('laporanA.index')->with('success', 'Laporan Angsuran berhasil ditambahkan.');
    }

    // Menampilkan detail laporan angsuran
    public function show($id)
    {
        $laporanA = LaporanAngsuranModel::findOrFail($id);
        return view('LaporanAngsuran.show', compact('laporanA'));
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $laporanA = LaporanAngsuranModel::findOrFail($id);
        return view('LaporanAngsuran.edit', compact('laporanA'));
    }

    // Mengupdate laporan angsuran
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'angsuran_id' => 'required|integer',
            'detail_laporan' => 'required|string',
        ]);

        $laporanA = LaporanAngsuranModel::findOrFail($id);
        $laporanA->update($validatedData);
        return redirect()->route('laporanA.index')->with('success', 'Laporan Angsuran berhasil diupdate.');
    }

    // Menghapus laporan angsuran
    public function destroy($id)
    {
        $laporanA = LaporanAngsuranModel::findOrFail($id);
        $laporanA->delete();
        return redirect()->route('laporanA.index')->with('success', 'Laporan Angsuran berhasil dihapus.');
    }
}
