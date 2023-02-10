<nav
    class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-0"
>
    <a href="#" class="navbar-brand d-flex align-items-center">
        <div
            class="flex-shrink-0 btn-square border border-warning rounded-circle p-2 me-2"
            style="width: 70px; height: 70px"
        >
            <img src="{{ asset('images/ummar/ummar-logo-bg-non.png') }}" alt="Logo Ummar" />
        </div>
        <h1
            class="m-0 hidetxt text-dark"
        >
            Ummar.id
        </h1>
    </a>

    <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div
            class="navbar-nav ms-auto bg-primary pe-4 py-3 py-lg-0 text-center"
        >
            <a href="/ummar" class="nav-item nav-link {{ ($title === 'Home') ? 'active' : '' }}">Home</a>
            <a href="/ummar/product" class="nav-item nav-link {{ ($title === 'Product') ? 'active' : '' }}">Products</a>
            <a href="/ummar/about" class="nav-item nav-link {{ ($title === 'About Us') ? 'active' : '' }}">About Us</a>
            <a href="/ummar/faq" class="nav-item nav-link {{ ($title === 'FAQ') ? 'active' : '' }}">FAQ</a>
            <a href="/ummar/contact" class="nav-item nav-link {{ ($title === 'Contact Us') ? 'active' : '' }}">Contact Us</a>
            @auth()
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ (\Illuminate\Support\Facades\Auth::user()->level == 'admin') ? '/ummar/admin' : '/ummar/user' }}">Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/ummar/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                    </ul>
                </li>
            @else
                <li class="nav-item">
                    <a href="/ummar/login" class="nav-link"><i class="bi bi-box-arrow-right"></i> Login</a>
                </li>
            @endauth
        </div>
    </div>
</nav>
