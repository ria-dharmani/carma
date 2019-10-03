@extends('layout')

@section('title')
LOG_IN
@stop

@section('content')
<form method="POST">
            <div class="f1">
            <label>Enter Email</label><input type="text" name="src">
            <label>Enter Password</label><input type="password" name="des">  

            <button style="    width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;">Submit</button>
        </div>

</form>

@stop