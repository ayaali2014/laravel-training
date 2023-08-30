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
                @foreach($products as $product)
                <tr>
                    <td>{{$product->product_name}}</td>
                    {{-- <td><img src="{{asset('/images/product/' . $product->product_picture)}}" alt=""></td> --}}
                    <td><img src="/images/{{$product->product_picture}}" alt="" width="50px" height="40px"></td>
                    <td>{{$product->product_availability}}</td>
                    <td>{{$product->product_price}}</td>
                    <td><button onclick="location.href='{{ route('product.show', [$product->id]) }}';">Show</button></td>
                    <td><button onclick="location.href='{{ route('product.edit', [$product->id]) }}';">edit</button></td>
                    <td><form action="{{route('product.destroy',[$product->id])}}" method="POST" enctype="multipart/form-data">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <button type="submit">Delete</button>               
                    </form>      </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>