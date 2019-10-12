<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request as RequestModal;

class requestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    public function index()
    {
        // $requests->request::latest()->get();
        // return view('requests.index')->with('requests',$requests);
    } 
    
    public function show()
    {

        return view('find_my_ride');
    }

    public function create()
    {
        return view('find');
    }

    public function store(Request $request)
    {
        $this -> validate($request,[
        'date' => ['required','date','after:yesterday'],
        'source' => ['required'],
        'des' => ['required']
        ]);
        $req = new RequestModal;
        $req->source = $request->input('source');
        $req->des = $request->input('des');
        $req->time = $request->input('time');
        $req->date = $request->input('date');

        $req->user_id = auth()->user()->id;
        

        $geocoder = new \OpenCage\Geocoder\Geocoder('618ed81b979f4ed083a8a7f19c060a58');
        $r_src = $geocoder->geocode($request->input("source"));
        $r_des = $geocoder->geocode($request->input("des"));
    // print($result['results'][0]['geometry']['lng']);
        // $lat_des=$result['results'][0]['geometry']['lat'];
        //echo("helooo"+ $long_src);
        //print($r_des);
        $lat_des=$r_des['results'][0]['geometry']['lat'];
        $lng_des=$r_des['results'][0]['geometry']['lng'];
        $lat_src=$r_src['results'][0]['geometry']['lat'];
        $lng_src=$r_src['results'][0]['geometry']['lng'];
        // echo($lng_src);
        // echo(gettype($lng_des));
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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    // protected function validator(Request $request)
    // {
    //     return Validator::make($request, [
    //         'source' => ['required', 'string', 'max:255'],
    //         'des' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'date' => ['required', 'date'],
    //         'time' => ['required','time'],
    //         //'user_id'=>Auth::user()->'id',
    //     ]);
    // }

    // protected function create(Request $request)
    // {   
        
    //     return User::create([
    //         'source' => $request['source'],
    //         'des' => $request['des'],
    //         'date' => $request['date'],
    //         'time'=>$request['time'],

    //       //  return view('requests.create');
    //     ]);
    // }

}
 