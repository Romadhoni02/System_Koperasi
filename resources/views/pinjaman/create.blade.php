@extends('layouts.app')

@section('content')
    <h1>Create Pinjaman</h1>
    <form action="{{ route('pinjamans.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_id">User ID:</label>
            <input type="number" class="form-control" id="user_id" name="user_id" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah:</label>
            <input type="number" step="0.01" class="form-control" id="jumlah" name="jumlah" required>
        </div>
        <div class="form-group">
            <label for="tanggal_pinjaman">Tanggal Pinjaman:</label>
            <input type="date" class="form-control" id="tanggal_pinjaman" name="tanggal_pinjaman" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
