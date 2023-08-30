<!DOCTYPE html>
<html>

<body>

    <h2>edit Forms</h2>

    <form action="{{ route('employee.update') }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" id="ssn" name="ssn" value="{{$emp->ssn}}">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="{{$emp->fname}}"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="{{$emp->lname}}"><br><br>
        <label for="bdate">bdate:</label><br>
        <input type="date" id="bdate" name="bdate" value="{{$emp->bdate}}"><br><br>
        <label for="adress">adress:</label><br>
        <input type="text" id="adress" name="adress" value="{{$emp->adress}}"><br><br>
        <input type="submit" value="Submit">
    </form>

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>

</html>
