<nav class="navbar navbar-expand-lg bg-primary bg-gradient">
    <div class="container-fluid mx-5 d-flex">
        <a href="/" style="text-shadow: 1px 1px 1px black" class="navbar-brand text-white">e-Laundry</a>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item">
                        <a class="btn border text-white" href="{{ route('logout') }}">Logout</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>