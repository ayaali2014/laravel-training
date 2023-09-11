<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <title>Home</title>

    @include('partials.admin.styles')
</head>

<body>
    @include('partials.admin.header')

    <main class="container mt-5">
        @yield('content')
    </main>
</body>

</html>
