@extends('layouts.layout')

@section('content')

<header >
  <div class="text-component text-center">
    <h1>FAQ </h1>
</div>
</header>

<section >
<script> 
			
			$(document).ready(function(){
				$("#flip1").click(function(){
				$("#panel1").slideToggle("slow");
				  });
				$("#flip2").click(function(){
				$("#panel2").slideToggle("slow");
				  });
				$("#flip3").click(function(){
				$("#panel3").slideToggle("slow");
				  });
				$("#flip4").click(function(){
				$("#panel4").slideToggle("slow");
				  });
				  $("#flip5").click(function(){
				$("#panel5").slideToggle("slow");
				  });
				  $("#flip6").click(function(){
				$("#panel6").slideToggle("slow");
				  });
				});
				</script>
		<style> 
			#flip1, #flip2,#flip3, #flip4,#flip5,#flip6{
			  padding: 25px;
			  text-align: center;
			  background-color:orchid;
			  color:navy;
			  font-size: 20px; 
			  border: solid 1px #440d3b;
			  /* background-image: url('https://www.pinclipart.com/picdir/big/345-3450109_png-file-svg-drop-down-arrow-png-clipart.png');
			  background-position: 100% 0; 
			  background-repeat:no-repeat;  */
			  /* background-size: 50%; */
			}
				
			#panel1,#panel2,#panel3,#panel4,#panel5,#panel6 {
			  padding: 50px;
			  text-align: center;
			  color:navy;
			  font-size: 16px;
			  background-color:MediumSlateBlue;
			  display: none;
			  
			}
			ul{
				list-style-type: none;
			}
		</style>
	<!-- <ul class="faq_categories">
		<li><a class="faq_category" href="#registration">Registration</a></li>
		<li><a class="faq_category" href="#find_ride">Find A Ride</a></li>
		<li><a class="faq_category" href="#post_ride">Post A Ride</a></li>
		<li><a class="faq_category" href="#ride_rate">Ride Rates</a></li>
		<li><a class="faq_category" href="#privacy">Privacy</a></li>
        <li><a class="faq_category" href="#feedback">Feedback/Complaints</a></li>
	</ul>  -->

	<div class="">
		<ul id="registration" >
			 
			<li ><h2 class="p-3 mb-2 bg-dark text-white" id="flip1">Registration</h2></li>
			<div id="panel1">
			<li >
			
            <div class="text-component">
				<p class="p-3 mb-2 bg-secondary text-white"><span>How do I sign up ?</span></p>          
                <p>If you are a new user you have to sign up by selecting sign up option. Enter details as mentioned in the form. After entering information click on register and you can enjoy services offered by carma.</p>
				</div> 
			</li>
            </div>
		</ul>

		<ul id="find_ride" >
			
			<li><h2 class="p-3 mb-2 bg-dark text-white" id="flip2">Find A Ride</h2></li>
            <div id="panel2">
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
			</div>
            
		</ul> 

		<ul id="post_ride" class="">
			
			<li><h2 class="p-3 mb-2 bg-dark text-white" id="flip3">Post a Ride</h2></li>
            <div id="panel3">
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
            </div>
			
		</ul> 

		<ul id="ride_rate" class="">
			
			<li class="cd-faq__title"><h2 class="p-3 mb-2 bg-dark text-white" id="flip4">Ride Rates</h2></li>
            <div id="panel4">
			<li >
            <div class="text-component">
				<p class="p-3 mb-2 bg-secondary text-white"><span>What is the ride-rate offered by CARMA ?</span></p>          
                <p>CARMA aims to have minimal rates for customers to have affordable and comfortable rides.Ride Rate is just Rs.1.5 per km. But while offering ride user can add or reduce the amount according to demand.</p>
            </div> 
			</li>
			</div>
		</ul>

		<ul id="privacy" class="">
			
			<li class="cd-faq__title"><h2 class="p-3 mb-2 bg-dark text-white" id="flip5">Privacy</h2></li>
            <div id="panel5">
			<li >
            <div class="text-component">
				<p class="p-3 mb-2 bg-secondary text-white"><span>How safe and secure are the journeys ?</span></p>          
                <p>CARMA does not disclose any personal information without consent from user. Also , your contact information is secure and visible to users only after conformaion of rides.There is special option of Ladies Only to ensure safety.</p>
            </div> 
			</li>
			</div>
		</ul>

        <ul id="feedback" class="">
			<li class="cd-faq__title"><h2 class="p-3 mb-2 bg-dark text-white" id="flip6">Feedback/Complaints</h2></li>
            <div id="panel6">
			<li >
            <div class="text-component">
				<p class="p-3 mb-2 bg-secondary text-white"><span>How can I submit my feedback and complaints ?</span></p>          
                <p>You can see our contact information on About Us page and us there anytime for your suggestions and complaints. Do feel free to drop your valued views and we try to work on it.</p>
            </div> 
			</li>
			</div>
		</ul>
	</div> 

</section> 
@stop
