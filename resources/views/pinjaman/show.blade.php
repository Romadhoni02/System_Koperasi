@extends('layouts.app')

@section('content')
    <h1>Pinjaman Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $pinjaman->id }}</td>
        </tr>
        <tr>
            <th>User ID</th>
            <td>{{ $pinjaman->user_id }}</td>
        </tr>
        <tr>
            <th>Jumlah</th>
            <td>{{ $pinjaman->jumlah }}</td>
        </tr>
        <tr>
            <th>Tanggal Pinjaman</th>
            <td>{{ $pinjaman->tanggal_pinjaman }}</td>
        </tr>
    </table>
    <a href="{{ route('pinjamans.index') }}" class="btn btn-primary">Back to Pinjaman List</a>
@endsection
