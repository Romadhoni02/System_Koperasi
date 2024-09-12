@extends('layouts.app')

@section('content')
    <h1>Members List</h1>
    <a href="{{ route('members.create') }}" class="btn btn-primary">Create New Member</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Member Code</th>
                <th>Registration Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $member)
                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->user_id }}</td>
                    <td>{{ $member->member_code }}</td>
                    <td>{{ $member->registration_date }}</td>
                    <td>
                        <a href="{{ route('members.show', $member->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('members.edit', $member->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
