<!-- header erea -->
<header>
    <div class="header-container section">
        <div class="logo">
            <i class='bx bxs-tree-alt'  ></i>
            <a href="#">COFFEE</a>
        </div>
        <form action="{{ route('search') }}" method="get" role="search">
            <div class="input-group">
                <input type="search" name="search" placeholder="Search your product" class="form-control">
                <button class="btn btn-primary" type="submit">
                    search
                </button>
            </div>
        </form>
        <ul class="nav-list">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('home') }}/#categories">Categories</a></li>
            <li><a href="{{ route('home') }}/#services">Services</a></li>
            <li><a href="{{ route('profile.user') }}">Profile</a></li>
            <li><a href="{{ route('order.index') }}">My Orders</a></li>
            <li><i class='bx bxs-cart-alt' style='color:#aa8989' ></i><a href="{{ route('getMycart') }}">My Cart</a></li>
            <li><a href="{{ route('logout', ['web']) }}">Log Out</a></li>
        </ul>
    </div>
</header>