<html>
    <body>
        <table>
            <thead>
                <tr>
                    <td>student id</td>
                    <td>student name</td>
                    <td>email</td>
                    <td>address</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$student->stud_id}}</td>
                    <td>{{$student->stud_name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->stud_address}}</td>
                </tr>
            </tbody>
        </table>
        <td><button onclick="location.href='{{ route('student.index') }}'">Go back</button></td>
    </body>
</html>