@extends('layouts.app')

@section('content')
    <h1>Daftar Laporan Angsuran</h1>
    <a href="{{ route('laporanA.create') }}" class="btn btn-primary">Tambah Laporan</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Angsuran ID</th>
                <th>Detail Laporan</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporanAs as $laporanA)
                <tr>
                    <td>{{ $laporanA->id }}</td>
                    <td>{{ $laporanA->angsuran_id }}</td>
                    <td>{{ $laporanA->detail_laporan }}</td>
                    <td>
                        <a href="{{ route('laporanA.show', $laporanA->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('laporanA.edit', $laporanA->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('laporanA.pdf') }}" class="btn btn-success">Download PDF</a>
                        <form action="{{ route('laporanA.destroy', $laporanA->id) }}" method="POST" style="display:inline;">
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