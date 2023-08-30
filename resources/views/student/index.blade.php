<html>
    <body>
        <a href="{{ route('student.create') }}" target="_blank" rel="noopener noreferrer">Create Student</a>
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
                @foreach($students as $student)
                <tr>
                    <td>{{$student->stud_id}}</td>
                    <td>{{$student->stud_name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->stud_address}}</td>
                    <td><button onclick="location.href='{{ route('student.show', [$student->stud_id]) }}';">Show</button></td>
                    <td><button onclick="location.href='{{ route('student.edit', [$student->stud_id]) }}';">edit</button></td>
                    <td><form action="{{route('student.delete')}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="stud_id" value="{{ $student->stud_id }}">
                        <button type="submit">Delete</button>               
                    </form>      </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>