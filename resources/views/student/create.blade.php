<!DOCTYPE html>
<html>

<body>

    <h2>Data Form</h2>

    <form action="{{ route('student.store') }}" method="post">
        @csrf
        <label for="stud_id">id:</label><br>
        <input type="text" id="stud_id" name="stud_id"><br>
        <label for="stud_name">name:</label><br>
        <input type="text" id="stud_name" name="stud_name"><br>
        <label for="email">email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="stud_address">adress:</label><br>
        <input type="text" id="stud_address" name="stud_address"><br><br>
        <input type="submit" value="Submit">
    </form>

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>

</html>
