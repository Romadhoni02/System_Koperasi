@extends('layouts.app')

@section('content')
    <h1>Detail Perjanjian Pinjaman</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $perjanjian->id }}</td>
        </tr>
        <tr>
            <th>Pinjaman ID</th>
            <td>{{ $perjanjian->pinjaman_id }}</td>
        </tr>
        <tr>
            <th>Detail Perjanjian</th>
            <td>{{ $perjanjian->detail_perjanjian }}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ $perjanjian->created_at }}</td>
        </tr>
        <tr>
            <th>Updated At</th>
            <td>{{ $perjanjian->updated_at }}</td>
        </tr>
    </table>

    <a href="{{ route('perjanjian.edit', $perjanjian->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('perjanjian.destroy', $perjanjian->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>

    <a href="{{ route('perjanjian.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
