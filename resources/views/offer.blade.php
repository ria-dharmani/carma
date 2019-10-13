@extends('layouts/layout')

@section('title')

Offer
@stop

@section('content')

<form method="POST" action="/offers">
    @csrf
            <div class="f1">
            <label>Enter Source</label><input type="text" name="source">
            <label>Enter Destination</label><input type="text" name="des">  
            <label>Enter Date</label><input type="date" name="date">
            <label>Enter Time</label><input type="time" name="time">
            <label>Ladies Only</label><input type="checkbox" name="ladies"><br>
            <label>Vacant Seats</label><input type="number" max="6" min="1" name="no_of_seats">

            <button style="width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;">Post the Ride</button>
        </div>

</form>

@stop