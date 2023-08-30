<!DOCTYPE html>
<html>

<body>

    <h2>HTML Forms</h2>

    <form action="{{ route('product.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="id">product id:</label><br>
        <input type="text" id="id" name="id" value="{{ $product->id }}"><br>
        <label for="product_name">product name:</label><br>
        <input type="text" id="product_name" name="product_name" value="{{ $product->product_name }}"><br>
        <label for="product_availability">product availability:</label><br>
        <input type="text" id="product_availability" name="product_availability" value="{{ $product->product_availability }}"><br>
        <label for="product_price">product price:</label><br>
        <input type="text" id="product_price" name="product_price" value="{{ $product->product_price }}"><br>
        <label for="product_picture">product picture:</label><br>
        <input type="file" id="product_picture" name="product_picture" value="{{ $product->product_picture }}"><br><br>
        <input type="submit" value="Submit">

    </form>

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>

</html>
