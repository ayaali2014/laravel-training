@if (Auth::guard('web')->check())
    @php
        $layout = 'layouts.user';
    @endphp
@elseif(Auth::guard('admin')->check())
    @php
        $layout = 'layouts.admin';
    @endphp
@endif

@extends($layout)
@section('content')
    <br>
    <br>
    <h2>Orders</h2>
    <table border="1px" style="color: black" >
        <thead>
            <tr>
                <th>order's number</th>
                <th>price</th>
                <th>user name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td><a href="{{ route('order.show', [$order->id]) }}">Show Order</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
