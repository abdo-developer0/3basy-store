<nav class="navbar navbar-dark navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ url('/img/logo.jpeg') }}" alt="#" class="rounded" width="45"> 3basy-store
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                @auth
                    @if( auth()->user()->access > 0 )
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('dashbord') }}">Dashbord</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('item.index') }}">Items</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('dashbord.orders') }}">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('dashbord.users') }}">Users</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('my-order') }}">my-orders</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('logout') }}">Logout</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('register') }}">Register</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>