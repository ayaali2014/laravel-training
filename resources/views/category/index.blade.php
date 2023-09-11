@extends('layouts.admin')
@section('content')
    <br>
    <br>
    <br>
    <div style="margin-left:35%">

        <h2 style="color: black; margin-left:7%">All of Categories</h2>
        <br>
        <div class="create" style=" margin-left:7%">
            <a href="{{ route('category.create') }}">Create Category</a>
        </div>
        <table border="1px" style="color: black ; width: 400px">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>picture</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td><img src="/images/{{ $category->avatar }}" alt="" width="80px" height="60px"></td>
                        <td>
                            <div><button
                                    onclick="location.href='{{ route('category.show', [$category->id]) }}';">Show</button>
                            </div>
                            <div><button
                                    onclick="location.href='{{ route('category.edit', [$category->id]) }}';">edit</button>
                            </div>
                            <form action="{{ route('category.destroy', [$category->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('DELETE')
                                @csrf
                                <input type="hidden" name="id" value="{{ $category->id }}">
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <a class="order" style=" margin-left:7%" href="{{ route('admin.order.index') }}">show all of orders</a>
    </div>
@endsection
