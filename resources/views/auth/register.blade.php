<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

    <title>Authentication</title>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-med-offset-4" style="margin-top: 20px;">
                <h2>Registeration</h2>
                <form action="{{ route('register.user') }}" method="post">
                    @if (Session::has('success'))
                        <div class="alert alert-success" style="color: green" style="padding-bottom: 5px">
                            {{ Session::get('success') }}</div>
                    @endif
                    @if (Session::has('fail'))
                        <div class="alert alert-danger" style="color: red" style="padding-bottom: 5px">
                            {{ Session::get('fail') }}</div>
                    @endif
                    <br>
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Full Name"
                            value="{{ old('name') }}"><br>
                        <span class="text-danger" style="color: red">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email"
                            value="{{ old('email') }}"><br>
                        <span class="text-danger" style="color: red">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password"
                            value="{{ old('password') }}"><br>
                        <span class="text-danger" style="color: red">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>

                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit" style="padding: 3px 10px;">
                            Register
                        </button>
                    </div>
                    <br>
                    <a href="login">Already register! login</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
