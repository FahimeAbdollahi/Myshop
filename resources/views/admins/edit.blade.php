@extends('layouts.app')

@section('content')
    <h1>Edit Admin</h1>
    <form action="{{ route('admins.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $admin->email }}" required>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <button type="submit">Update</button>
    </form>
@endsection
