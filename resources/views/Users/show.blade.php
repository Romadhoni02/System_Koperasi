@extends('layouts.app')

@section('content')
    <h1>User Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $user->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>Role</th>
            <td>{{ $user->role }}</td>
        </tr>
    </table>
    <a href="{{ route('users.index') }}" class="btn btn-primary">Back to Users List</a>
@endsection
