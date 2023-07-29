<header class="app-bar">
    <div class="hamburger">
        <button id="hamburgerButton">☰</button>
    </div>
    <div class="logo-navbar">
        <img src="assets/img/logo.png" alt="logo" srcset="" />
        Roast 'N Roll
    </div>
    <div id="navDrawer" class="navbar">
        <ul class="menu-navbar">
            <li>
                <div class="btn-close"><button id="close">
                        <i class="fa-solid fa-square-xmark fa-1x"></i></button>
                </div>
            </li>
            <li>
                <a class="{{ $title === 'Beranda' ? 'active' : '' }}" href="/">Beranda</a>
            </li>
            <li><a href="#menu">Our Product</a></li>
            <li><a href="/order">Order</a></li>
            <li><a href="#about">About Us</a></li>
        </ul>
        <ul class="btn-navbar">
            @auth
                <li class="nav-item dropdown-toggle">
                    Welcome back, {{ auth()->user()->name }}
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="post" class="dropdown-item">
                                @csrf
                                <button type="submit" id="logout">Logout <i
                                        class="fa-solid fa-right-from-bracket"></i></button>
                            </form>
                    </ul>
                </li>
            @else
                <li class="nav-item">
                    <a class="login" href="/login">Login</a>
                </li>
            @endauth
        </ul>
    </div>
</header>
