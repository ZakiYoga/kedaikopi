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
            <li><a href="/">Our Product</a></li>
            <li><a href="/">Order</a></li>
            <li><a href="/">About Us</a></li>
        </ul>
        <ul class="btn-navbar">
            @auth
            <li class="nav-item dropdown-toggle">
                Welcome back, {{ auth()->user()->name }}
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </li>
            @else
            <li><a class="login" href="/login">Login</a></li>
            @endauth
        </ul>
    </div>
</header>

