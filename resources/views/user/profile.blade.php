@extends('layouts.user')
@section('content')
    <br>
    <br>
    <div class="categories_section" id="categories">
        <div class="heading">
            <h2>World Class Products</h2>
        </div>
        <div style="padding-left: 45%">
            <img src="/images/profile-image.jpg" alt="" width="50px" height="40px">
            <h3 style="color: black">{{ $user->name }}</h3>
            <a href="{{ route('order.index') }}">My orders</a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
