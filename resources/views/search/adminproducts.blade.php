<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Result of search</title>
</head>

<body>
    <div class="categories_section" id="categories">
        <div class="heading">
            <h2>World Class Products</h2>
        </div>
        @foreach ($products as $product)
            <div class="main-categories">
                <div class="p">
                    <div class="p-img">
                        <img src="/images/{{ $product->avatar }}" alt="" width="80px" height="60px">
                    </div>
                    <div class="data">
                        <h4>{{ $product->name }}</h4>
                        <p class="sp">${{ $product->price }}</p>
                        <div class="addcart">
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
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
