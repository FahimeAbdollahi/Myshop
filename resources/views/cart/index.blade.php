@extends('layouts.app')

@section('content')
    <h1>Shopping Cart</h1>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <ul>
        @foreach($cart as $id => $details)
            <li>
                <img src="{{ $details['image'] }}" alt="{{ $details['name'] }}" width="50">
                <span>{{ $details['name'] }}</span>
                <span>{{ $details['quantity'] }}</span>
                <span>{{ $details['price'] }}</span>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('cart.checkout') }}">Checkout</a>
@endsection
