<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <title>Category Edition</title>
</head>
<body>
    <h2>Category Edition</h2>
    <form action="{{ route('category.update',$category->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <hr>
        <br>
        <label for="name">category name:</label><br>
        <input type="text" id="name" name="name" value="{{ $category->name }}"><br>
        <span class="text-danger" style="color: red">
            @error('name')
                {{ $message }}
            @enderror
        </span>
        <br>
        <label for="avatar">product picture:</label><br>
        <input type="file" id="avatar" name="avatar" value="{{ $category->avatar }}"><br>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
