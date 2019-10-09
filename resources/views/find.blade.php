@extends('layouts/layout')

@section('title')
Find_A_Ride
@stop

@section('content')
        <form>
            <div class="f1">
            <label>Enter Source</label>
            <input type="search" placeholder="Jawaharlal Nehru Road" name="from" autocomplete="off" autocorrect="off" value>
            
            <label>Enter Destination</label><input type="text" name="des">     
            
            <label>Enter Date</label><input type="date">
            <label>Enter Time</label><input type="time"><br>
            <button style="    width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;">Find a Ride</button>
        </div>

        </form>
@stop