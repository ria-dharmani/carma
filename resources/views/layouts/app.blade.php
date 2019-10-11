<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>        @yield('title')    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('form.css') }}"> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
    
    <!-- Styles -->

    <link rel="stylesheet" href="{{ URL::asset('/css/app.css')}}">

    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
  <link href='https://fonts.googleapis.com/css?family=Faster One' rel='stylesheet'>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.10.1/bootstrap-social.css" rel="stylesheet" >


  <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="carousel.js"></script>

</head>
<body>

<div class="container">
<div class="page-header">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><h2>CARMA</h2></a>
      </div>
        <ul class="nav nav-pills navbar-right">
            <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">FAQs</a>
            </li>
                <!-- Authentication Links -->
                @guest
                                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if (auth()->user()->image)
                                    <img src="{{ asset(auth()->user()->image) }}" style="width: 40px; height: 40px; border-radius: 50%;">
                                @endif
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

            <!-- <li class="nav-item">
                <a class="nav-link" href="#"><span class="glyphicon glyphicon-user"></span> Sign up</a>
            </li> -->
          </ul>
      </div>
</div>  

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">FAQs</a>
                    </li>

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if (auth()->user()->image)
                                    <img src="{{ asset(auth()->user()->image) }}" style="width: 40px; height: 40px; border-radius: 50%;">
                                @endif
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


<!-- Footer -->
    <footer class="page-footer font-small teal pt-4" >

        <!-- Footer Text -->
        <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">
            <hr class="clearfix w-100 d-md-none pb-3">
            <!-- Grid column -->
            <div class="col-md-4 mt-md-0 mt-3">

            <!-- Content -->
            <h5 class="text-uppercase"><b>Address :</b></h5>
            <p>carma_ent, Collector's colony</p>
            <p>New Link road</p>
            <p>Chembur, Mumbai-74</p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-md-0 mb-3">

                <!-- Content -->
                <h5 class="text-uppercase"><b>Contact no. :</b></h5>
                <p>1234567890</p>
                <h5 class="text-uppercase "><b>Email Address :</b></h5>
                <p>carma_ent@gmail.com</p>
                </div>

                <div class="col-md-4">
                
                <!-- Facebook -->
                <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                    <!-- Twitter -->
                <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                
                </div>
            </div>  
            
        </div>
        
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        </div>
        <!-- Footer Text -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="#"> CARma.com</a>
        </div>
        <!-- Copyright -->

    </footer>
</body>
</html>
