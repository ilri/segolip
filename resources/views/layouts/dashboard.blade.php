<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
    <div class="maincontainer">
        <div class="navigation">
            <ul>
                <li>
                    <a href="{{ route('welcome') }}">
                        <span class="icon"><ion-icon name="globe-outline"></ion-icon></span>
                        <span class="title">
                            <b>{{ config('app.name', 'Segolip') }}</b>
                        </span>
                    </a>
                </li>
                @guest
                    <li>
                        <a href="{{ route('login') }}">
                            <span class="icon"><i class="fa fa-sign-in" aria-hidden="true"></i></span>
                            <span class="title">{{ __('Login') }}</span>
                        </a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">
                                <span class="icon"><i class="fa fa-sign-in" aria-hidden="true"></i></span>    
                                <span class="title">{{ __('Register') }}</span>
                            </a>
                        </li>
                    @endif
                @else
                    <li>
                        <a href="{{ route('welcome') }}">
                            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="title">
                                {{ __('Home') }}
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('myorders') }}">
                            <span class="icon"><ion-icon name="list-circle-outline"></ion-icon></span>
                            <span class="title">{{ __('My Orders') }}</span>
                        </a>
                    </li>
                        @if (auth()->user()->hasRole('admin'))
                        <li>
                            <a href="{{ route('services.index') }}">
                                <span class="icon"><ion-icon name="folder-open-outline"></ion-icon></span>
                                <span class="title">{{ __('All Services') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('allorders') }}">
                                <span class="icon"><ion-icon name="list-outline"></ion-icon></span>
                                <span class="title">{{ __('All Orders') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('all-users') }}">
                                <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                                <span class="title">{{ __('All Users') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('all-charts') }}">
                                <span class="icon"><ion-icon name="bar-chart-outline"></ion-icon></span>
                                <span class="title">{{ __('Charts') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('all-reports') }}">
                                <span class="icon"><ion-icon name="document-text-outline"></ion-icon></span>
                                <span class="title">{{ __('Reports') }}</span>
                            </a>
                        </li>
                        @endif
                    <li>
                        <a href="{{ route('useraccount') }}">
                            <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                            <span class="title">{{ __('Profile') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                            <span class="title">{{ __('Logout') }}</span>  
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick="toggleMenu();"></div>
                <div class="search">
                    <label for="">
                        <input type="text" placeholder="Search">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <div class="user">
                    <span><b>{{ Auth::user()->name }}</b></span>
                </div>
            </div>
            @if (auth()->user()->hasRole('admin'))
            <div class="cardBox">
                <div class="card-num">
                    <div>
                        <div class="numbers">8</div>
                        <div class="cardName">Services</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="folder-open-outline"></ion-icon>
                    </div>
                </div>
                <div class="card-num">
                    <div>
                        <div class="numbers">3</div>
                        <div class="cardName">Users</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>
                <div class="card-num">
                    <div>
                        <div class="numbers">2</div>
                        <div class="cardName">Orders</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>
                <div class="card-num">
                    <div>
                        <div class="numbers">$6,042</div>
                        <div class="cardName">Earnings</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="bag-handle-outline"></ion-icon>
                    </div>
                </div>
            </div>
            @else
            <div class="cardBox"></div>
            @endif
            <div class="details">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>
    <!-- <script src="{{ asset('js/charts.js') }}"></script> -->
    <script>
        function toggleMenu() {
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');
            
            toggle.classList.toggle('active')
            navigation.classList.toggle('active')
            main.classList.toggle('active')
        }
        // add hovered class in selected list item
        let list = document.querySelectorAll('.navigation li');
        function activeLink() {
            list.forEach((item) => item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) => item.addEventListener('mouseover', activeLink));
    </script>
    @yield('javascript')
</body>

</html>