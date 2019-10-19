<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confirm;
use App\Offer;

class ConfirmController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index()
    {
        
    }
    public function create()
    {
        
    }
    public function store(Request $request)
    {
        $con=new Confirm;
        $con->o_id = $request->input('off_id');
        $con->r_id = $request->input('req_id');
        //return($con->r_id);
        $con->save();
    
        $off= Offer::find($request->input('off_id'));
        //return($off);
        $off->no_of_seats= $off->no_of_seats-1;
        $off->save();
        return view('confirm')->with('con1',$con);

    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
