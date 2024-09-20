@extends('layouts.app')

@section('content')
    <h1>Daftar Laporan Pinjaman</h1>
    <a href="{{ route('laporans.create') }}" class="btn btn-primary">Tambah Laporan</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pinjaman ID</th>
                <th>Detail Laporan</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporans as $laporan)
                <tr>
                    <td>{{ $laporan->id }}</td>
                    <td>{{ $laporan->pinjaman_id }}</td>
                    <td>{{ $laporan->detail_laporan }}</td>
                    <td>
                        <a href="{{ route('laporans.show', $laporan->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('laporans.edit', $laporan->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('laporans.pdf') }}" class="btn btn-success">Download PDF</a>
                        <form action="{{ route('laporans.destroy', $laporan->id) }}" method="POST" style="display:inline;">
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