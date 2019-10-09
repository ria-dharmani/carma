@extends('layouts/layout')

@section('title')

Offer
@stop

@section('content')
<form>
            <div class="f1">
            <label>Enter Source</label><input type="text" name="src">
            <label>Enter Destination</label><input type="text" name="des">  
            <label>Is it a round-trip</label>   
            <label>Enter Date and Time</label><input type="datetime-local">
            <label>Vacant Seats</label><input type="number" max="6" min="1">

            <button style="    width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;">Post the Ride</button>
        </div>

</form>

@stop