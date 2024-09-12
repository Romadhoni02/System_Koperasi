@extends('layouts.app')

@section('content')
    <h1>Edit Laporan Angsuran</h1>

    <form action="{{ route('laporanA.update', $laporanA->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="angsuran_id">Angsuran ID</label>
            <input type="number" name="angsuran_id" class="form-control" id="angsuran_id" value="{{ $laporanA->angsuran_id }}" required>
        </div>

        <div class="form-group">
            <label for="detail_laporan">Detail Laporan</label>
            <textarea name="detail_laporan" class="form-control" id="detail_laporan" required>{{ $laporanA->detail_laporan }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
