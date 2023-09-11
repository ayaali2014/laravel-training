<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{asset('css/create.css')}}">
</head>

<body>

    <h2>Category Creatation</h2>

    <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <hr>
        <br>
        <label for="name">Category Name:</label>
        <input type="text" id="name" name="name"><br>
        <span class="text-danger" style="color: red">
            @error('name')
                {{ $message }}
            @enderror
        </span>
        <br>
        <label for="avatar">Category picture:</label>
        <input type="file" id="avatar" name="avatar"><br>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
