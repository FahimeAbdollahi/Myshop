@extends('layouts.app')

@section('content')
    <h1>Admins</h1>
    <a href="{{ route('admins.create') }}">Create New Admin</a>
    <ul>
        @foreach ($admins as $admin)
            <li>
                <a href="{{ route('admins.show', $admin->id) }}">{{ $admin->email }}</a>
                <a href="{{ route('admins.edit', $admin->id) }}">Edit</a>
                <form action="{{ route('admins.destroy', $admin->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
