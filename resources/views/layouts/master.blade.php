<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title') | {{ config('app.name', 'BC PUFF') }}</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="author" content="https://www.upwork.com/freelancers/~018229318f5dcae047">
</head>

<body>


    <div class="container">
        <div class="navbar">
            <div class="logo">
                <b><i>
                        <h1>BC PUFF</h1>
                    </i></b>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="{{ route('products.index') }}">PRODUCTS</a></li>
                    <li><a href="{{ route('contact') }}">CONTACT</a></li>

                    @auth
                    @if (Auth::user()->isAdmin())
                        <li><a href="{{ route('admin.index') }}">ADMIN</a></li>
                    @else
                        <li><a href="{{ route('dashboard') }}">ACCOUNT</a></li>
                    @endif
                    @endauth

                    @guest
                        <li><a href="{{ route('login') }}">LOGIN</a></li>
                        <li><a href="{{ route('register') }}">REGISTER</a></li>
                    @endguest
                </ul>
            </nav>

            <a href="{{ route('cart.index') }}">
                <img src="/img/cart.png" width="30px" height="30px">
                @if (count((array) session('cart')) > 0)
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span class="badge badge-pill badge-danger">
                    {{ count((array) session('cart')) }}
                </span>
                @endif
            </a>

            <img src="img/menu-icon.png" class="menu-icon" onclick="menutoggle()">
        </div>

        <div class="main">
            @yield('content')
        </div>
    </div>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @include('includes.modals')

    @yield('scripts')

</body>

</html>