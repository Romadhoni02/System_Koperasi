@extends('layouts.app')

@section('content')
    <h1>Detail Laporan Angsuran</h1>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $laporanA->id }}</td>
        </tr>
        <tr>
            <th>Angsuran ID</th>
            <td>{{ $laporanA->angsuran_id }}</td>
        </tr>
        <tr>
            <th>Detail Laporan</th>
            <td>{{ $laporanA->detail_laporan }}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ $laporanA->created_at }}</td>
        </tr>
        <tr>
            <th>Updated At</th>
            <td>{{ $laporanA->updated_at }}</td>
        </tr>
    </table>

    <a href="{{ route('laporanA.index') }}" class="btn btn-primary">Kembali ke Daftar Laporan</a>
@endsection
