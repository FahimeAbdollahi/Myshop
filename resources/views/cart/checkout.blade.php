@extends('layouts.app')

@section('content')
    <h1>Checkout</h1>
    <form action="{{ route('cart.placeOrder') }}" method="POST">
        @csrf
        <label for="address_id">Address:</label>
        <select name="address_id" id="address_id">
            @foreach(auth()->user()->addresses as $address)
                <option value="{{ $address->id }}">{{ $address->postal_code }}</option>
            @endforeach
        </select>
        <button type="submit">Place Order</button>
    </form>
@endsection
