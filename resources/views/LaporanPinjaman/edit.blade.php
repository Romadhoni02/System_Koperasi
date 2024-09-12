@extends('layouts.app')

@section('content')
    <h1>Edit Laporan Pinjaman</h1>

    <form action="{{ route('laporans.update', $laporan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="pinjaman_id">Pinjaman ID</label>
            <input type="number" name="pinjaman_id" class="form-control" id="pinjaman_id" value="{{ $laporan->pinjaman_id }}" required>
        </div>

        <div class="form-group">
            <label for="detail_laporan">Detail Laporan</label>
            <textarea name="detail_laporan" class="form-control" id="detail_laporan" required>{{ $laporan->detail_laporan }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
