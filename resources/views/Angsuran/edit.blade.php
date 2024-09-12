@extends('layouts.app')

@section('content')
    <h1>Edit Angsuran</h1>

    <form action="{{ route('anggaran.update', $angsuran->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="pinjaman_id">Pinjaman ID</label>
            <input type="number" name="pinjaman_id" class="form-control" id="pinjaman_id" value="{{ $angsuran->pinjaman_id }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_angsuran">Jumlah Angsuran</label>
            <input type="number" name="jumlah_angsuran" class="form-control" id="jumlah_angsuran" value="{{ $angsuran->jumlah_angsuran }}" required>
        </div>

        <div class="form-group">
            <label for="tanggal_angsuran">Tanggal Angsuran</label>
            <input type="date" name="tanggal_angsuran" class="form-control" id="tanggal_angsuran" value="{{ $angsuran->tanggal_angsuran }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
