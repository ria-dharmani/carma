

@extends('layouts/layout')

@section('title')

Home Page
@stop

@section('content')


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
    <a href="/find" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-search"></span>   Find a Ride </a>
    <a href="/offer" class="btn btn-lg btn-primary" ><span class="glyphicon glyphicon-plus"></span>  Offer a Ride </a>
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
