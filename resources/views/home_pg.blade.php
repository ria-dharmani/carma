

@extends('layouts/layout')

@section('title')

Home Page
@stop

@section('content')

    <style>
        .jumbotron{
            background-color:rgb(200, 223, 147);
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
        </style>
 

 
<!-- jumbotron enlarges fonts and puts everything in a gray box with rounded corners. If jumbotron is outside a container it fills the total width. You can change the styles by placing the changes after the Bootstrap CDN link -->
<div class="jumbotron">
<!-- Carousel -->
<!-- Surround everything with a div with the class carousel slide -->
<div id="theCarousel" class="carousel slide" data-ride="carousel">
 
    <!-- Define how many slides to put in the carousel -->
    <ol class="carousel-indicators">
      <li data-target="#theCarousel" data-slide-to="0" class="active"> </li >
      <li data-target="#theCarousel" data-slide-to="1"> </li>
      <li data-target ="#theCarousel" data-slide-to="2"> </li>
    </ol >
   
    <!-- Define the text to place over the image -->
    <div class="carousel-inner">
      <div class="item active" >
      <div class ="slide1"></div>
      <div class="carousel-caption">
        <h1>Amazing Rides</h1>
        <p>Find the perfect ones to ride with.</p>
      </div>
    </div>
    <div class="item">
    <div class="slide2"></div>
    <div class="carousel-caption">
      <h1>Thousands of Colors</h1>
      <p>Every Color you can Imagine</p>
    </div>
    </div>
    <div class="item">
    <div class="slide3"></div>
    <div class="carousel-caption">
    <h1>Amazing Illustrations</h1>
    <p>And they are All Free</p>
    </div>
    </div>
    </div>
   
    <!-- Set the actions to take when the arrows are clicked -->
    <a class="left carousel-control" href="#theCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"> </span>
    <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#theCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="icon-next"></span>
    </a>
    </div>
</div>

<div class="jumbotron">
<div class="main_buttons">
<!-- You can group buttons. You can size the buttons with btn-group-lg, btn-group-sm, or btn-group-xs -->
    <button type="button" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-search"></span> 
    <a href="/find">Find a Ride</a></button>
    <button type="button" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-plus"></span> 
    <a href="/offer">Offer a Ride</a></button>
    <button type="button" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-repeat"></span> Repeat a Ride</button>
</div>
</div>
</div>
<div class="container">
<h2>How it Works</h2>
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-4 col-xs-12 mr-5">
            <h4><a href="#col1Content" data-toggle="collapse" data-target="#col1Content">For passengers</a></h4>
 
            <!-- With collapse in this div shows on load -->
            <div id="col1Content" class="collapse">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Free signup <span class="glyphicon glyphicon-ok"></span></li>
                <li class="list-group-item">Affordable rides <span class="glyphicon glyphicon-ok"></span></li>
                <li class="list-group-item">Safe, reliable drivers <span class="glyphicon glyphicon-ok"></span></li>
              </ul>
            </div>
          
    </div>
    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
            <h4><a href="#col2Content" data-toggle="collapse" data-target="#col2Content">For drivers</a></h4>
       
            <!-- With class collapse this div won't show on load -->
            <div id="col2Content" class="collapse">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Free signup <span class="glyphicon glyphicon-ok"></span></li>
                <li class="list-group-item">Free Online payouts <span class="glyphicon glyphicon-ok"></span></li>
                <li class="list-group-item">Safe, reliable passengers <span class="glyphicon glyphicon-ok"></span></li>
              </ul>
            </div>
    </div>

</div>
</div>
</div><br>
@stop
