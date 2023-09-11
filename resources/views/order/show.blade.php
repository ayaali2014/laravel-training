@extends('layouts.user')
@section('content')
    <br>
    <br>
    <br>
    <div style="color: black">
        <h2>Order #{{ $order->id }}</h2>
        <h3>{{ $order->user->name }}</h3>
        <h3>{{ $order->price }} EGP</h3>
    </div>
    <table border="1px" style="color: black">
        <thead>
            <tr>
                <th>Item Amount</th>
                <th>Item Name</th>
                <th>Item Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->order_items as $item)
                <tr>
                    <td>{{ $item->amount }}</td>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->product->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
