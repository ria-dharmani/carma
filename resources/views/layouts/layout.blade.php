<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>
        @yield('title')
    </title>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('form.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="1.css"> -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <meta name="viewport" content="width = device-width, initial-scale = 1"> -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Faster One' rel='stylesheet'>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.10.1/bootstrap-social.css" rel="stylesheet" >

 <script src="{{ asset('js/app.js') }}" defer></script>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="carousel.js"></script>

@yield('maps')
<style>
        body{
          background-color:LightBlue ;
          width:100%
          height: 100%;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }
        /* footer{
          background-color:navy;
          color:white;

        } */
        .jumbotron{
            background-color:MediumOrchid ;
            color:rgb(188, 92, 201);
        }
        /* Adds borders for tabs */
        .tab-content {
            border-left: 1px solid #ddd;
            border-right: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            padding: 10px;
        }
        .nav-tabs {
            margin-bottom: 0;
        }
        .main_buttons{
            padding:10px 220px;
        }
        .btn btn-lg btn-primary{
            margin-right: 5px;
        }
        .container h2{
            margin:10px 400px;
        }
        .nav-pills > .nav-item > a:hover{
          background-color:rgb(116, 200, 240);
        }
        /* Carousel Styling */
        .slide1{
          background-image: url('slide1.jpg');
          height: 270px;
          background-repeat: no-repeat;
          background-position: center;
          background-size: cover;
        }
        .slide2{
          background-image: url('slide2.jpg');
          height: 200px;
          background-repeat: no-repeat;
          background-position: center;
          background-size: cover;
        }
        .slide3{
          background-image: url('car.png');
          height: 200px;
          background-repeat: no-repeat;
          background-position: center;
          background-size: cover;
        }
        .carousel-caption h1{
          font-size: 5.4em;
          font-family: 'Pacifico', cursive;
          padding-bottom: .4em;
        }
        .carousel-caption p{
          font-size: 2em;
        }
        .navbar-brand{
          font-family:Faster One;
        }
        .col-md-4 > #social-fb{
          padding:5px;
        }
        .affix {
            top: 20px;
          }
        </style>

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
                <a class="nav-link active" href="/hm">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/requests/create">Find a Ride</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/offers/create">Offer a Ride</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">FAQs</a>
            </li>
            <ul class="nav nav-pills navbar-right">
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

            <!-- <li class="nav-item">
                <a class="nav-link" href="#"><span class="glyphicon glyphicon-user"></span> Sign up</a>
            </li> -->
          </ul>
      </div>
</div>     




        @yield('content')
</body>

  <!-- Footer -->
  <footer class="page-footer font-small teal pt-4">

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
</html>