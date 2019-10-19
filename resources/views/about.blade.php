@extends('layouts.layout')

@section('content')

<header >
  <div class="text-component text-center">
    <h1>About Us</h1>
</div>
</header>

<section>
    <style>
        #content_para1,#content_para2,#content_para3{
            color:navy;
            padding:25px;
            font-size:25px;
        }
        #ld_icon{
            align:center;
        }
    </style>
    <span class="border-primary">
    <div class="container">
        <div class="bg-info">
            <h2>We Believe</h2>
            <h5 id="content_para1">Many of us spend good amount of time behind wheels.<br>
            Why can't we use this commute for an interesting conversation with like-minded people?</h5>
        </div>
    </div></span>
    <div class="container">
        <div class="bg-warning">
            <h2>Our Mission</h2>
            <h5 id="content_para2">We aim at bringing the drivers and passengers alog the same path together.<br>This saves your expenses and time, reduces congestion on roads. It is an environment-friendly option. </h5>
        </div>
    </div>
    <div class="container">
        <div class="bg-danger">
            <h2>We're Hiring!</h2>
            <h5 id="content_para3">We are a high-growth company with innovation being at the center of what we do. We are always recruiting talented new team members to be part of our exciting journey.<br>Know more about our expertise at our <a>Tech twitter account</a>.</h5>
            <h5 class="text-center">Join us on LinkedIn</h5><a class="btn btn-social-icon btn-linkedin" id="ld_icon">
                <span class="fa fa-linkedin"></span>
            </a>

        </div>
    </div>

</section>


@stop
