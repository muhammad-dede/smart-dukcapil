<header id="header"
    class="fixed-top d-flex align-items-center {{ Request::route()->getName() == 'home' ? 'header-transparent' : '' }}">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <h1><a href="{{ url('') }}"><img src="{{ asset('') }}logo.png" alt="logo">
                    &nbsp;<span>Smart Dukcapil</span></a></h1>
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                @if (Request::route()->getName() == 'home')
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#layanan">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#petunjuk">Petunjuk</a></li>
                @endif
                <li><a class="nav-link scrollto text-info" href="{{ url('login') }}">Login</a></li>
                <li><a class="nav-link scrollto text-warning" href="{{ url('register') }}">Daftar</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
