@extends('layouts.app')

@section('content')
    <h1>Buat Perjanjian Pinjaman Baru</h1>

    <form action="{{ route('perjanjian.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="pinjaman_id">Pinjaman ID</label>
            <input type="number" name="pinjaman_id" class="form-control" id="pinjaman_id" required>
        </div>

        <div class="form-group">
            <label for="detail_perjanjian">Detail Perjanjian</label>
            <textarea name="detail_perjanjian" class="form-control" id="detail_perjanjian" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
