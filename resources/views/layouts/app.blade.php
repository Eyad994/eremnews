<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link href="dist/css/pages/ecommerce.css" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="/js/plugins/simplemde/simplemde.min.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!-- Styles -->
    <style>
        .pagination {
            padding-top: 30px;
            justify-content: center;
        }
        .btn1{
            float: right;
            margin-right: 150px;
            margin-top: 20px;
        }
    </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/oneui.css') }}">

</head>
<body>
<div id="app">

    <div class="row page-titles" style="background: #4f5467;padding-left: 100px;">
        <div class="col-md-5 align-self-center">
            <ul class="navbar-nav mr-auto">
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item">
                </li>
                <li class="nav-item">
                    <a href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" style="width: 120px;    float: left;"></a>

                    <div style="float: left;
    color: red;
    font-size: 20px;
    font-weight: bold;
    margin-top: 70px;
    margin-left: -16px;">Medicin</div><div style="    float: left;
    color: white;
    font-size: 15px;
    font-weight: bold;
    margin-top: 74px;">Store</div>

                </li>
            </ul>
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-2">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"  style="background: #4f5467 !important;box-shadow: 0px 0px 0px !important; margin-top: 45px;">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a style="color: white" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a  style="color: white" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" style="color: white" class="nav-link dropdown-toggle" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                        <a class="dropdown-item" href="{{ route('product.create') }}"
                                        >
                                            {{ __('Add Product') }}
                                        </a>

                                        <hr>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </div>

    <main class="py-4" style="margin-top: -24px;">
        @yield('content')
    </main>
</div>
</body>
</html>
