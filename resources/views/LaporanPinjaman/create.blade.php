@extends('layouts.app')

@section('content')
    <h1>Tambah Laporan Pinjaman</h1>

    <form action="{{ route('laporans.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="pinjaman_id">Pinjaman ID</label>
            <input type="number" name="pinjaman_id" class="form-control" id="pinjaman_id" required>
        </div>

        <div class="form-group">
            <label for="detail_laporan">Detail Laporan</label>
            <textarea name="detail_laporan" class="form-control" id="detail_laporan" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
