<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <title>Product Edition</title>
</head>

<body>
    <h2>Product Edition</h2>
    <form action="{{ route('product.update', [$product->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="category_id" value="{{ $product->category_id }}">
        <label for="name">product name:</label><br>
        <input type="text" id="name" name="name" value="{{ $product->name }}"><br>
        <span class="text-danger" style="color: red">
            @error('name')
                {{ $message }}
            @enderror
        </span>
        <br>
        <label for="availability">product availability:</label><br>
        <input type="text" id="availability" name="availability" value="{{ $product->availability }}"><br>
        <span class="text-danger" style="color: red">
            @error('availability')
                {{ $message }}
            @enderror
        </span>
        <br>
        <label for="price">product price:</label><br>
        <input type="text" id="price" name="price" value="{{ $product->price }}"><br>
        <span class="text-danger" style="color: red">
            @error('price')
                {{ $message }}
            @enderror
        </span>
        <label for="avatar">product picture:</label><br>
        <input type="file" id="avatar" name="avatar" value="{{ $product->avatar }}"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
