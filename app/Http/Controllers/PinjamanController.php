<?php

namespace App\Http\Controllers;

use App\Models\Pinjaman;
use App\Models\PinjamanModel;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    // Display a listing of the pinjamans
    public function index()
    {
        $pinjamans = PinjamanModel::all();
        return view('pinjaman.index', compact('pinjamans'));
    }

    // Show the form for creating a new pinjaman
    public function create()
    {
        return view('pinjaman.create');
    }

    // Store a newly created pinjaman in the database
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'jumlah' => 'required|numeric',
            'tanggal_pinjaman' => 'required|date',
        ]);

        $pinjaman = new PinjamanModel([
            'user_id' => $request->get('user_id'),
            'jumlah' => $request->get('jumlah'),
            'tanggal_pinjaman' => $request->get('tanggal_pinjaman'),
        ]);

        $pinjaman->save();
        return redirect('/pinjamans')->with('success', 'Pinjaman created successfully');
    }

    // Display the specified pinjaman
    public function show($id)
    {
        $pinjaman = PinjamanModel::findOrFail($id);
        return view('pinjaman.show', compact('pinjaman'));
    }

    // Show the form for editing the specified pinjaman
    public function edit($id)
    {
        $pinjaman = PinjamanModel::findOrFail($id);
        return view('pinjaman.edit', compact('pinjaman'));
    }

    // Update the specified pinjaman in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'jumlah' => 'required|numeric',
            'tanggal_pinjaman' => 'required|date',
        ]);

        $pinjaman = PinjamanModel::findOrFail($id);
        $pinjaman->user_id = $request->get('user_id');
        $pinjaman->jumlah = $request->get('jumlah');
        $pinjaman->tanggal_pinjaman = $request->get('tanggal_pinjaman');
        $pinjaman->save();

        return redirect('/pinjamans')->with('success', 'Pinjaman updated successfully');
    }

    // Remove the specified pinjaman from the database
    public function destroy($id)
    {
        $pinjaman = PinjamanModel::findOrFail($id);
        $pinjaman->delete();

        return redirect('/pinjamans')->with('success', 'Pinjaman deleted successfully');
    }
}
