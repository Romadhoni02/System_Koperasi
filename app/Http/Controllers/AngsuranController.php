<?php

namespace App\Http\Controllers;

use App\Models\AngsuranModel;
use App\Models\PinjamanModel;
use Illuminate\Http\Request;

class AngsuranController extends Controller
{
    // Menampilkan daftar angsuran
    public function index()
    {
        $angsurans = AngsuranModel::all();
        return view('Angsuran.index', compact('angsurans'));
    }

    // Menampilkan form create
    public function create()
    {
        $pinjaman = PinjamanModel::all(); // Mengambil semua data pinjaman
        return view('Angsuran.create', compact('pinjaman'));
    }


    // Menyimpan angsuran baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pinjaman_id' => 'required|exists:pinjaman,id',
            'jumlah_angsuran' => 'required|numeric',
            'tanggal_angsuran' => 'required|date',
        ]);

        AngsuranModel::create($validatedData);

        return redirect()->route('anggaran.index')->with('success', 'Angsuran berhasil ditambahkan.');
    }

    // Menampilkan detail angsuran
    public function show($id)
    {
        $angsuran = AngsuranModel::findOrFail($id);
        return view('Angsuran.show', compact('angsuran'));
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $angsuran = AngsuranModel::findOrFail($id);
        return view('Angsuran.edit', compact('angsuran'));
    }

    // Mengupdate angsuran
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'pinjaman_id' => 'required|integer',
            'jumlah_angsuran' => 'required|numeric',
            'tanggal_angsuran' => 'required|date',
        ]);

        $angsuran = AngsuranModel::findOrFail($id);
        $angsuran->update($validatedData);
        return redirect()->route('anggaran.index')->with('success', 'Angsuran berhasil diupdate.');
    }

    // Menghapus angsuran
    public function destroy($id)
    {
        $angsuran = AngsuranModel::findOrFail($id);
        $angsuran->delete();
        return redirect()->route('anggaran.index')->with('success', 'Angsuran berhasil dihapus.');
    }
}