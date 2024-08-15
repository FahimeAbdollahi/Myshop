@extends('layouts.app')

@section('content')
    <h1>Admin Details</h1>
    <p>Email: {{ $admin->email }}</p>
    <a href="{{ route('admins.index') }}">Back to List</a>
@endsection
