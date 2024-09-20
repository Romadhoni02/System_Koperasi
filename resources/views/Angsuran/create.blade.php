@extends('layouts.app')

@section('content')
    <h1>Tambah Angsuran</h1>

    <form action="{{ route('anggaran.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="pinjaman_id">Pilih Pinjaman</label>
            <select name="pinjaman_id" class="form-control" id="pinjaman_id" required>
                @foreach ($pinjaman as $p)
                    <option value="{{ $p->id }}">{{ $p->id }} - Jumlah: {{ $p->jumlah }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="jumlah_angsuran">Jumlah Angsuran</label>
            <input type="number" name="jumlah_angsuran" class="form-control" id="jumlah_angsuran" required>
        </div>

        <div class="form-group">
            <label for="tanggal_angsuran">Tanggal Angsuran</label>
            <input type="date" name="tanggal_angsuran" class="form-control" id="tanggal_angsuran" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection