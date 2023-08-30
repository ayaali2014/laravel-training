<!DOCTYPE html>
<html>

<body>

    <h2>HTML Forms</h2>

    <form action="{{ route('employee.store') }}" method="post">
        @csrf
        <label for="ssn">ssn:</label><br>
        <input type="text" id="ssn" name="ssn"><br>
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br><br>
        <label for="bdate">bdate:</label><br>
        <input type="date" id="bdate" name="bdate"><br><br>
        <label for="adress">adress:</label><br>
        <input type="text" id="adress" name="adress"><br><br>
        <input type="submit" value="Submit">
    </form>

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>

</html>
