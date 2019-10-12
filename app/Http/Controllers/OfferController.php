<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
class OfferController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

   
    public function create()
    {
        return view('offer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request,[
            'date' => ['required','date','after:yesterday'],
            'source' => ['required'],
            'des' => ['required']
            ]);
            $req = new Offer;
            $req->source = $request->input('source');
            $req->des = $request->input('des');
            $req->time = $request->input('time');
            $req->date = $request->input('date');
            $req->user_id = auth()->user()->id;
            $req->ladies = $request->input('ladies');
            
    
            $geocoder = new \OpenCage\Geocoder\Geocoder('618ed81b979f4ed083a8a7f19c060a58');
            $r_src = $geocoder->geocode($request->input("source"));
            $r_des = $geocoder->geocode($request->input("des"));
        
            $lat_des=$r_des['results'][0]['geometry']['lat'];
            $lng_des=$r_des['results'][0]['geometry']['lng'];
            $lat_src=$r_src['results'][0]['geometry']['lat'];
            $lng_src=$r_src['results'][0]['geometry']['lng'];
            
            $lng_des=floatval($lng_des);
            $lat_des=floatval($lat_des);
            $req->des_lat = $lat_des;
            $req->des_long = $lng_des;
            $req->src_lat = $lat_src;
            $req->src_long = $lng_src;
            $req->save();
            
            $context = array(
                'ride' => $req
            );
    
            return view('find_my_ride')->with($context);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('find_my_ride');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


