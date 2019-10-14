@extends('layouts/layout')

@section('title')
Find_A_Ride
@stop



@section('content')

        <form method="POST" action="/requests">
            @csrf
            <div class="f1">
    
            <label>Enter Source</label><input type="text" name="source" id="source" >
            
            <label>Enter Destination</label><input type="text" name="des" id="des">     


            <label>Enter Date</label><input type="date" name="date">
            <label>Enter Time</label><input type="time" name="time"><br>

            <button type="submit" style="    width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;">Find a Ride</button>
        </div>
    </form>
@stop