@extends('layouts.app')

@section('content')
    <h1>Daftar Angsuran</h1>
    <a href="{{ route('anggaran.create') }}" class="btn btn-primary">Tambah Angsuran</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pinjaman ID</th>
                <th>Jumlah Angsuran</th>
                <th>Tanggal Angsuran</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($angsurans as $angsuran)
                <tr>
                    <td>{{ $angsuran->id }}</td>
                    <td>{{ $angsuran->pinjaman_id }}</td>
                    <td>{{ $angsuran->jumlah_angsuran }}</td>
                    <td>{{ $angsuran->tanggal_angsuran }}</td>
                    <td>
                        <a href="{{ route('anggaran.show', $angsuran->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('anggaran.edit', $angsuran->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('anggaran.destroy', $angsuran->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
