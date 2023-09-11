<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/show.css')}}">
    <title>Document</title>
</head>

<body>
    <h2>{{$category->name}} Category Products </h2>

    <a href="{{ route('product.create', ['category_id' => $category->id]) }}" target="_blank" rel="noopener noreferrer">Create Product</a>
    <table border="1px">
        <thead>
            <tr>
                <th>
                    Product Name
                </th>
                <th>
                    Product Price
                </th>
                <th>
                    Product Picture
                </th>
                <th>
                    Product Availability
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category->products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td><img src="/images/{{$product->avatar}}" alt="" width="80px" height="60px"></td>
                    <td>{{ $product->availability}}</td>
                    <td>
                        <div>
                            <button onclick="location.href='{{ route('product.edit', [$product->id]) }}';">edit</button>
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
