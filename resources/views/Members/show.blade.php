@extends('layouts.app')

@section('content')
    <h1>Member Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $member->id }}</td>
        </tr>
        <tr>
            <th>User ID</th>
            <td>{{ $member->user_id }}</td>
        </tr>
        <tr>
            <th>Member Code</th>
            <td>{{ $member->member_code }}</td>
        </tr>
        <tr>
            <th>Registration Date</th>
            <td>{{ $member->registration_date }}</td>
        </tr>
    </table>
    <a href="{{ route('members.index') }}" class="btn btn-primary">Back to Members List</a>
@endsection
