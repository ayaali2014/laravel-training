@extends('layouts.user')
@section('content')
    <div class="categories_section" id="categories">
        <div class="heading">
            <h2>World Class Products</h2>
        </div>
        @foreach ($products as $product)
            <div class="main-categories">
                <div class="p">
                    <div class="p-img">
                        <img src="/images/{{ $product->avatar }}" alt="" width="80px" height="60px">
                    </div>
                    <div class="data">
                        <h4>{{ $product->name }}</h4>
                        <p class="sp">${{ $product->price }}</p>
                        <form action="{{ route('addToMyCart') }}" method="post">
                            @csrf
                            <div class="addcart">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="number" placeholder="1" id="amount" name="amount">
                                <input type="submit" value="Add to my cart">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
