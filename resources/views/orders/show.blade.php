@extends('layouts.app')

@section('content')
    <h1>Order Details</h1>
    <p>Order ID: {{ $order->id }}</p>
    <p>Order Total: {{ $order->order_total }}</p>
    <p>Order Date: {{ $order->order_date }}</p>
    <h2>Items</h2>
    <ul>
        @foreach($order->sellLines as $sellLine)
            <li>
                <span>{{ $sellLine->product->name }}</span>
                <span>{{ $sellLine->quantity }}</span>
                <span>{{ $sellLine->price }}</span>
            </li>
        @endforeach
    </ul>
@endsection
