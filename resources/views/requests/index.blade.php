@extends('layouts/layout')
@section('title')
Rides requested
@stop

@section('content')
    <div class=row>
        <div class="col-md-12">
            <br />
            <h3>All Rides Requested</h3>
            <br />
            <table class="table table-bordered">
                <tr>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>
                </tr>

                    @foreach ($reqs as $row)
                    <tr>
                        <td> {{$row['source']}}</td>
                        <td> {{$row['des']}}</td>
                        <td> {{$row['date']}}</td>
                        <td> {{$row['time']}}</td>
                    </tr>    
                    @endforeach
            </table>
        </div>
    </div>
@stop