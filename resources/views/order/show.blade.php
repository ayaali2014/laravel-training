<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{asset('css/index.css')}}"> --}}
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            Order
        </legend>
        <table border="1ps">
            <thead>
                <tr>
                    <th>number</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$order->id}}</td>
                </tr>

            </tbody>
        </table>
    </fieldset>

    <fieldset>
        <legend>
            Category Products
        </legend>
        <table border="1px">
            <thead>
                <tr>
                    <th>
                        User Name
                    </th>
                </tr>
            </thead>
            <tbody>
                {{-- @dd($category->products) --}}
                    <tr>
                        <td>{{$order->user->name}}</td>
                    </tr>
            </tbody>
        </table>
    </fieldset>
</body>
</html>