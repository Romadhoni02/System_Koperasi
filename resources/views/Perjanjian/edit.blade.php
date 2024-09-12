@extends('layouts.app')

@section('content')
    <h1>Edit Perjanjian Pinjaman</h1>

    <form action="{{ route('perjanjian.update', $perjanjian->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="pinjaman_id">Pinjaman ID</label>
            <input type="number" name="pinjaman_id" class="form-control" id="pinjaman_id" value="{{ $perjanjian->pinjaman_id }}" required>
        </div>

        <div class="form-group">
            <label for="detail_perjanjian">Detail Perjanjian</label>
            <textarea name="detail_perjanjian" class="form-control" id="detail_perjanjian" required>{{ $perjanjian->detail_perjanjian }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>

    <a href="{{ route('perjanjian.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
