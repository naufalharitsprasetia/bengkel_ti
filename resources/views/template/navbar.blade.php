<!-- Start NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand lucky-font d-flex" href="#">
            <img src="/img/bengkel.png" alt="Logo" width="30" height="30"
                class="d-inline-block align-text-top mx-2" />
            Bengkel TI
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'shop' ? 'active' : '' }}" href="/shop">Shop</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $active === 'lain-lain' ? 'active' : '' }}" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Lain-Lain
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/about">About</a></li>
                        <li><a class="dropdown-item" href="/servis">Servis</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        @can('admin')
                            <li><a class="dropdown-item" href="/admin-control">For Admin</a></li>
                        @endcan
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'keranjang' ? 'active' : '' }}" href="/keranjang"><i
                            class="fa-solid fa-cart-shopping"></i> Cart</a>
                </li>
                {{-- Login Start  --}}
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Hai, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                    My Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link btn btn-warning" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-warning" href="/register">Register</a>
                    </li>
                @endauth
                {{-- Login End --}}
            </ul>
        </div>
    </div>
</nav>
<!-- End NAVBAR  -->
