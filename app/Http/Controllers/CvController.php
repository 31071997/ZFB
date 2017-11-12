<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;

class CvController extends Controller
{

	
    public function postCv(Request $request )
    {  
           $cv= new Cv();

           
           $cv->first_name=$request['first_name'];
           $cv->last_name=$request['last_name'];
           $cv->email=$request['email'];
           $cv->age=$request['age'];
           $cv->address=$request['address'];
           $cv->skills=$request['skills'];
           $cv->post=$request['post'];
           $cv->ssc_name=$request['ssc_name'];
           $cv->ssc=$request['ssc'];
           $cv->hsc_name=$request['hsc_name'];
           $cv->hsc=$request['hsc'];
           $cv->bs_name=$request['bs_name'];
           $cv->bs=$request['bs'];
           $cv->ms_name=$request['ms_name'];
           $cv->ms=$request['ms'];


           $cv->save();
           return redirect()->route('submit');
    }

    public function getShow()
    {
    	return view('html.show');
    }
    
}
