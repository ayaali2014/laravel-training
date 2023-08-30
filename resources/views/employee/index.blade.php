<html>
    <body>
        <a href="{{ route('employee.create') }}" target="_blank" rel="noopener noreferrer">Create Employee</a>
        <table>
            <thead>
                <tr>
                    <td>ssn</td>
                    <td>fname</td>
                    <td>lname</td>
                    <td>ssn</td>
                    <td>bdate</td>
                    <td>address</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($employee as $emp)
                   <tr>
                        <td>
                            <td>{{$emp->ssn}}</td>
                            <td>{{$emp->fname}}</td>
                            <td>{{$emp->lname}}</td>
                            <td>{{$emp->ssn}}</td>
                            <td>{{$emp->bdate}}</td>
                            <td>{{$emp->adress}}</td>
                            <td><button onclick="location.href='{{ route('employee.show', [$emp->ssn]) }}';">Show</button></td>
                            <td><button onclick="location.href='{{ route('employee.edit', [$emp->ssn]) }}'">edit</button></td>
                            <td>
                                <form action="{{route('employee.delete')}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="ssn" value="{{ $emp->ssn }}">
                                    <button type="submit">Delete</button>               
                                </form>                                   
                            </td>
                        </td>
                    </tr> 
                @endforeach
            </tbody>
        </table>
    </body>
</html>