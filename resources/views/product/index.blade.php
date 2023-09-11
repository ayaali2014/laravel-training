<html>
<thead>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</thead>

<body>
    <a href="{{ route('product.create') }}" target="_blank" rel="noopener noreferrer">Create Product</a>
    <table border="1px">
        <thead>
            <tr>
                <th>product name</th>
                <th>product picture</th>
                <th>product availability</th>
                <th>product price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td><img src="/images/{{ $product->avatar }}" alt="" width="50px" height="40px"></td>
                    <td>{{ $product->availability }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <div><button
                                onclick="location.href='{{ route('product.edit', [$product->id]) }}';">edit</button>
                        </div>
                        <form action="{{ route('product.destroy', [$product->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('DELETE')
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
