<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="{{asset('img/mdb-favicon.ico')}}" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.11.2/css/all.css')}}">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap')}}">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('style')
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">
        <a href="{{route('front.home')}}" class="navbar-brand waves-effect">
            <strong class="red-text">Clothes Store</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"
        ><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="{{route('front.home')}}" class="nav-link waves-effect">Главная страница</a>
                </li>
                @if(auth()->user() != null)
                    @if((int) auth()->user()->role == App\Models\User::ROLE_ADMIN)
                        <li class="nav-item">
                            <a href="{{route('admin.home')}}" class="nav-link waves-effect">Админ</a>
                        </li>
                    @endif
                @endif
            </ul>
            <!-- Left navbar links -->
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a href="{{route('front.baskets.index')}}" class="nav-link waves-effect">
                        @auth
                            <span class="badge red z-depth-1 mr-1">{{auth()->user()->userProduct->count()}}</span>
                        @endauth
                        <i class="fa fa-shopping-cart"></i>
                        <span class="clearfix d-none d-sm-inline-block">Cart</span>
                    </a>
                </li>
            </ul>
            <nav>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        @if(auth()->user() != null)
                            <form action="{{route('logout')}}" method="POST">
                            @csrf
                                <input class="btn" type="submit" value="выйти">
                            </form>
                        @else
                            <form action="{{route('home')}}">
                                @csrf
                                <input class="btn" type="submit" value="войти">
                            </form>
                        @endif
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</nav>

@yield('content')

<footer class="page-footer text-center font-small mt-4 wow fadeIn">
    <div class="pt-4">
        <a href="#" role="button" class="btn btn-outline-white">
            Clothes store <i class="fa fa-graduation-cap ml-2"></i>
        </a>
        <a href="#" role="button" class="btn btn-outline-white">
            Online shop <i class="fa fa-graduation-cap ml-2"></i>
        </a>
    </div>
    <div class="footer-copyright py-3">
        Clothes store
    </div>
</footer>
<!-- jQuery -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript"></script>

</body>
</html>
