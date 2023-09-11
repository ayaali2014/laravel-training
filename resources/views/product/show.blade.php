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
                    <td>{{$product->name}}</td>
                    <td><img src="/images/{{$product->avatar}}" alt="" width="50px" height="40px"></td>
                    <td>{{$product->availability}}</td>
                    <td>{{$product->price}}</td>
                </tr>
            </tbody>
        </table>
        <td><button onclick="location.href='{{ route('category.show') }}'">Go back</button></td>

    </body>
</html>