<!DOCTYPE html>
<html>

<body>

    <h2>HTML Forms</h2>

    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="id">product id:</label><br>
        <input type="text" id="id" name="id"><br>
        <label for="product_name">product name:</label><br>
        <input type="text" id="product_name" name="product_name"><br>
        <label for="product_availability">product availability:</label><br>
        <input type="text" id="product_availability" name="product_availability"><br>
        <label for="admin_id">admin id:</label><br>
        <input type="text" id="admin_id" name="admin_id"><br>
        <label for="category_id">category id:</label><br>
        <input type="text" id="category_id" name="category_id"><br>
        <label for="product_price">product price:</label><br>
        <input type="text" id="product_price" name="product_price"><br><br>
        <label for="product_picture">product picture:</label><br>
        <input type="file" id="product_picture" name="product_picture"><br><br>
        <input type="submit" value="Submit">

    </form>

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>

</html>
