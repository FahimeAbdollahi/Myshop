@extends('layouts.app')

@section('content')
    <h1>Create Admin</h1>
    <form action="{{ route('admins.store') }}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Create</button>
    </form>
@endsection
