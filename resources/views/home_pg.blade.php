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
      <div class ="slide1">
      <img src="https://st10.cannypic.com/thumbs/44/440659_632_canny_pic.jpg" alt="img1" height="100%" width="100%">  
      </div>     
      <div class="carousel-caption">
        <h1 class="bg-primary">Amazing Rides</h1>
        <p class="bg-primary">Eco-smart and Secure platform for all your rides</p>
      </div>
    </div>
    <div class="item">
    <div class="slide2">
    <img src="https://d540vms5r2s2d.cloudfront.net/mad/uploads/mad_blog_5cdac357abb631557840727.png" alt="img2" height="100%" width="100%">
    </div>
    <div class="carousel-caption">
      <h1 class="bg-primary">Find suitable Ride</h1>
      <p class="bg-primary">With CARMA you get the best value for rides</p>
    </div>
    </div>
    <div class="item">
    <div class="slide3">
    <img src="https://st4.cannypic.com/thumbs/43/436993_632_canny_pic.jpg" alt="img3" height="100%" width="100%">
    </div>
    <div class="carousel-caption">
    <h1 class="bg-primary">Share your ride and save</h1>
    <p class="bg-primary">Create new friendships with your fellow carpoolers. Connect with various professionals and enjoy networking </p>
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
<div class="bg container-fluid">
    <div class="main_buttons" style ="float:left; z-index:1000;">
      <table class="table" style="width=100%;">
      <tr>
    <!-- You can group buttons. You can size the buttons with btn-group-lg, btn-group-sm, or btn-group-xs -->
        <th><a href="/requests/create" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-search"></span>   Find a Ride </a></th>
        <th><a href="/offers/create" class="btn btn-lg btn-primary" ><span class="glyphicon glyphicon-plus"></span>  Offer a Ride </a></th>
        <!-- <th><button type="button" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-repeat"></span> Repeat a Ride</button></th> -->
      </tr>
      </table>
    </div>
    <img src="http://phpcoder.tech/html-css/car.png" class="car">
  </div>
<div class="container-fluid" id="hiw">
<h2 align="center">How it Works</h2>
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