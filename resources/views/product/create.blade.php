<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>
    <h2>Product Creation</h2>
    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="category_id" value="{{app('request')->input('category_id')}}">
        <label for="name">product name:</label><br>
        <input type="text" id="name" name="name"><br>
        <span class="text-danger" style="color: red">
            @error('name')
                {{ $message }}
            @enderror
        </span>
        <br>
        <label for="availability">product availability:</label><br>
        <input type="text" id="availability" name="availability"><br>
        <span class="text-danger" style="color: red">
            @error('availability')
                {{ $message }}
            @enderror
        </span>
        <br>
        <label for="price">product price:</label><br>
        <input type="text" id="price" name="price"><br>
        <span class="text-danger" style="color: red">
            @error('price')
                {{ $message }}
            @enderror
        </span>
        <br>
        <label for="avatar">product picture:</label>
        <input type="file" id="avatar" name="avatar"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
