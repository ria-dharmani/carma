@extends('layouts.layout')

@section('content')

<header >
  <div class="text-component text-center">
    <h1>FAQ </h1>
</div>
</header>

<section >
	<ul class="faq_categories">
		<li><a class="faq_category" href="#registration">Registration</a></li>
		<li><a class="faq_category" href="#find_ride">Find A Ride</a></li>
		<li><a class="faq_category" href="#post_ride">Post A Ride</a></li>
		<li><a class="faq_category" href="#ride_rate">Ride Rates</a></li>
		<li><a class="faq_category" href="#privacy">Privacy</a></li>
        <li><a class="faq_category" href="#feedback">Feedback/Complaints</a></li>
	</ul> 

	<div class="">
		<ul id="registration" >
			<li ><h2 class="p-3 mb-2 bg-dark text-white">Registration</h2></li>
			<li >
            <div class="text-component">
				<p class="p-3 mb-2 bg-secondary text-white"><span>How do I sign up ?</span></p>          
                <p>If you are a new user you have to sign up by selecting sign up option. Enter details as mentioned in the form. After entering information click on register and you can enjoy services offered by carma.</p>
				</div> 
			</li>
            
		</ul>

		<ul id="find_ride" >
			<li><h2 class="p-3 mb-2 bg-dark text-white">Find A Ride</h2></li>
            <li >
            <div class="text-component">
				<p class="p-3 mb-2 bg-secondary text-white"><span>How do I Find A Ride on CARMA?</span></p>          
                <p>Go to Find A Ride page and enter your start time and location and destination. You will be provided with trused user profiles offering rides suitlable for you and rates offered by them. Choose the user as per your choice by price and ratings.You can also contact the car owner via private message once you've booked your seat.</p>
            </div> 
			</li>
            <li >
            <div class="text-component">
				<p class="p-3 mb-2 bg-secondary text-white"><span>Can I cancell confirmed ride?</span></p>          
                <p>Yes !! But cancellation of ride will reduce your user rating.</p>
            </div> 
			</li>
            
		</ul> 

		<ul id="post_ride" class="">
			<li><h2 class="p-3 mb-2 bg-dark text-white">Post a Ride</h2></li>
            <li >
            <div class="text-component">
				<p class="p-3 mb-2 bg-secondary text-white"><span>How do I Offer A Ride on CARMA?</span></p>          
                <p>Go to offer a ride page and enter your start time location and destination. You can also add stopovers where you can take passengers aboard. </p>
            </div> 
			</li>
            <li >
            <div class="text-component">
				<p class="p-3 mb-2 bg-secondary text-white"><span>Where can I see available passengers for offered ride ?</span></p>          
                <p>Current Ride page will solve this issue. In this page you can view the list of available passengers for your ride and you can confirm passsenger by selecting that option.Passenger information can be viewed so that you can easily contact your travel partner.</p>
            </div> 
			</li>
            
            <li >
            <div class="text-component">
				<p class="p-3 mb-2 bg-secondary text-white"><span>Can I cancel my ride ?</span></p>          
                <p>Yes !! You can cancel ride offered but cancellation of ride will lead to reduction in your rating.</p>
            </div> 
			</li>
            
			
		</ul> 

		<ul id="ride_rate" class="">
			<li class="cd-faq__title"><h2 class="p-3 mb-2 bg-dark text-white">Ride Rates</h2></li>
            <li >
            <div class="text-component">
				<p class="p-3 mb-2 bg-secondary text-white"><span>What is the ride-rate offered by CARMA ?</span></p>          
                <p>CARMA aims to have minimal rates for customers to have affordable and comfortable rides.Ride Rate is just Rs.1.5 per km. But while offering ride user can add or reduce the amount according to demand.</p>
            </div> 
			</li>
		</ul>

		<ul id="privacy" class="">
			<li class="cd-faq__title"><h2 class="p-3 mb-2 bg-dark text-white">Privacy</h2></li>
            <li >
            <div class="text-component">
				<p class="p-3 mb-2 bg-secondary text-white"><span>How safe and secure are the journeys ?</span></p>          
                <p>CARMA does not disclose any personal information without consent from user. Also , your contact information is secure and visible to users only after conformaion of rides.There is special option of Ladies Only to ensure safety.</p>
            </div> 
			</li>
		</ul>

        <ul id="feedback" class="">
			<li class="cd-faq__title"><h2 class="p-3 mb-2 bg-dark text-white">Feedback/Complaints</h2></li>
            <li >
            <div class="text-component">
				<p class="p-3 mb-2 bg-secondary text-white"><span>How can I submit my feedback and complaints ?</span></p>          
                <p>You can see our contact information on About Us page and us there anytime for your suggestions and complaints. Do feel free to drop your valued views and we try to work on it.</p>
            </div> 
			</li>
		</ul>
	</div> 

</section> 
@stop