<!DOCTYPE html>
<html>

<body>

    <h2>Data Form</h2>

    <form action="{{ route('student.update') }}" method="post">
        @csrf
        @method('PUT')
        <label for="stud_id">id:</label><br>
        <input type="text" id="stud_id" name="stud_id" value="{{ $student->stud_id }}"><br>
        <label for="stud_name">name:</label><br>
        <input type="text" id="stud_name" name="stud_name" value="{{ $student->stud_name }}"><br>
        <label for="email">email:</label><br>
        <input type="email" id="email" name="email" value="{{ $student->email }}"><br>
        <label for="stud_address">adress:</label><br>
        <input type="text" id="stud_address" name="stud_address" value="{{ $student->address }}"><br><br>
        <input type="submit" value="Submit">
    </form>

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>

</html>
