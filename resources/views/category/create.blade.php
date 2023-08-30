<!DOCTYPE html>
<html>

<body>

    <h2>HTML Forms</h2>

    <form action="{{ route('category.store') }}" method="post">
        @csrf

        <label for="name">Category Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <input type="submit" value="Submit">

    </form>

    {{-- <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p> --}}

</body>

</html>
