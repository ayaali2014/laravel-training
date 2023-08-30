<html>
    <body>
        <a href="{{ route('product.create') }}" target="_blank" rel="noopener noreferrer">Create Product</a>
        <table>
            <thead>
                <tr>
                    <td>product name</td>
                    <td>product picture</td>
                    <td>product availability</td>
                    <td>product price</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$product->product_name}}</td>
                    {{-- <td><img src="{{asset('/public/product/' . $product->product_picture)}}" alt=""></td> --}}
                    <td><img src="/images/{{$product->product_picture}}" alt="" width="50px" height="40px"></td>
                    <td>{{$product->product_availability}}</td>
                    <td>{{$product->product_price}}</td>
                </tr>
            </tbody>
        </table>
        <td><button onclick="location.href='{{ route('product.index') }}'">Go back</button></td>

    </body>
</html>