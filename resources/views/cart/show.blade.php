<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Cart</title>
</head>

<body>
    <h2>My Cart</h2>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Amount</th>
                <th>total price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carts as $cart)
                <tr>
                    <td>{{ $cart->product->name }}</td>
                    <td>{{ $cart->amount }}</td>
                    <td>{{ $cart->amount * $cart->product->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="order">
        <a href="{{route('order.create')}}">Order Now!</a>
    </div>
    <footer class="footer-container">
        <a href="{{ route('home') }}">Back to Home</a>
    </footer>
</body>

</html>
