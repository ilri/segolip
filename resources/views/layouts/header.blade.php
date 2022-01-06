<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="{{ route('welcome') }}">Segolip</a></h1>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li><a href="{{ route('welcome') }}/#about">About</a></li>
            <li><a href="{{ route('welcome') }}/#ourservices">Services</a></li>
            <li><a href="{{ route('faqs') }}">FAQs</a></li>
            <li><a href="{{ route('welcome') }}/#gallery">Gallery</a></li>
            <li><a href="{{ route('welcome') }}/#contact">Contacts</a></li>
            @guest
            <li class="drop-down"><a href="">Account</a>
                <ul>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                </ul>
            </li>
            @else
            <li class="drop-down"><a href="">{{ Auth::user()->name }}</a>
                <ul>
                    <li>
                        <a class="dropdown-item" href="{{ route('myorders') }}">
                            {{ __('Dashboard') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
            @endguest
            </ul>
        </nav>
    </div>
</header>