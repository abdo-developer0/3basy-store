<nav class="navbar navbar-dark navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ url('/img/logo.jpeg') }}" alt="#" class="rounded" width="45"> 3Stor
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/cart') }}">Cart</a>
                </li>

                @if ( request()->session()->has('user') )

                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('dashbord.index') }}">Dashbord</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('logout') }}">Logout</a>
                </li>

                @else
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('register') }}">Register</a>
                </li>

                @endif
            </ul>
        </div>
    </div>
</nav>