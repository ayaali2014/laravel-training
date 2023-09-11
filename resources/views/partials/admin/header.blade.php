<!-- header erea -->
<header>
    <div class="header-container section">
        <div class="logo">
            <i class='bx bxs-tree-alt'  ></i>
            <a href="#">COFFEE</a>
        </div>
        <form action="{{ route('searchAdmin') }}" method="get" role="search">
            <div class="input-group">
                <input type="search" name="search" placeholder="Search your product" class="form-control">
                <button class="btn btn-primary" type="submit">
                    search
                </button>
            </div>
        </form>
        <ul class="nav-list">
            <li><a href="{{ route('category.index') }}">Home</a></li>
            <li><a href="{{ route('admin.order.index') }}">Orders</a></li>
            <li><a href="{{ route('logout', ['admin']) }}">Log Out</a></li>
        </ul>
    </div>
</header>