@extends('layouts.app')

@section('content')
    <h1>Edit Member</h1>
    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="user_id">User ID:</label>
            <input type="number" class="form-control" id="user_id" name="user_id" value="{{ $member->user_id }}" required>
        </div>
        <div class="form-group">
            <label for="member_code">Member Code:</label>
            <input type="text" class="form-control" id="member_code" name="member_code" value="{{ $member->member_code }}" required>
        </div>
        <div class="form-group">
            <label for="registration_date">Registration Date:</label>
            <input type="date" class="form-control" id="registration_date" name="registration_date" value="{{ $member->registration_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('members.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection