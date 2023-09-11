@extends('layouts.user')
@section('content')
    <!-- big pic -->
    <div class="big-pic" id="home">
    </div>
    <div class="slim">
        <!-- categories -->
        <div class="categories_section" id="categories">
            <div class="heading">
                <h2>World Class Categories</h2>
            </div>
            <div class="main-categories">
                @foreach ($categories as $category)
                    <div class="p">
                        <div class="p-img">
                            <img src="/images/{{ $category->avatar }}" alt="" width="100px" height="80px">
                        </div>
                        <div class="data">
                            <h4>{{ $category->name }}</h4>
                            <div class="addcart">
                                <a href="{{ route('get.product', ['id' => $category->id]) }}"><i class='bx bxs-cart-alt'
                                        style='color:#aa8989'></i>show products</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- service -->
        <div class="services section" id="services">
            <h3 class="headser">Unparalleled Service</h3>
            <p class="paragraph">First and foremost, <strong>COFFEE</strong> cafeteria services play a crucial role in
                providing us with nutritious meals. A well-managed cafeteria understands the importance of offering a
                balanced diet, incorporating fresh fruits, vegetables, lean proteins, and whole grains into their menus. By
                prioritizing the nutritional value of the food they serve, cafeterias help us maintain our energy levels,
                focus, and overall health.

                Efficiency and convenience are also key factors in cafeteria services. During busy lunch hours, time is
                often limited, and we want to enjoy our meals without unnecessary delays. A good cafeteria understands this
                and implements measures like self-service stations or grab-and-go options to ensure a quick and seamless
                dining experience. By streamlining their operations, cafeterias can save us precious time and allow us to
                make the most of our lunch breaks.</p>
        </div>
        <!-- find us -->
        <div class="find">
            <h3>Find Us</h3>
        </div>
    </div>
@endsection
