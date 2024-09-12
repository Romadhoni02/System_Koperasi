@extends('layouts.app')

@section('content')
    <h1>Detail Laporan Pinjaman</h1>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $laporan->id }}</td>
        </tr>
        <tr>
            <th>Pinjaman ID</th>
            <td>{{ $laporan->pinjaman_id }}</td>
        </tr>
        <tr>
            <th>Detail Laporan</th>
            <td>{{ $laporan->detail_laporan }}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ $laporan->created_at }}</td>
        </tr>
        <tr>
            <th>Updated At</th>
            <td>{{ $laporan->updated_at }}</td>
        </tr>
    </table>

    <a href="{{ route('laporans.index') }}" class="btn btn-primary">Kembali ke Daftar Laporan</a>
@endsection
