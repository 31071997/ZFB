<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\FinanceCv;


class FinanceCvController extends Controller
{
    public function postFinanceCv(Request $request )
    {  
           $cv= new FinanceCv();

           
           $cv->first_name=$request['first_name'];
           $cv->last_name=$request['last_name'];
           $cv->email=$request['email'];
           $cv->age=$request['age'];
           $cv->select_address= $request['select_address'];
           $cv->address=$request['address'];
           $cv->gender= $request['gender'];
           $cv->skills=$request['skills'];
           $cv->company_name=$request['company_name'];
           $cv->time_duration =$request['time_duration'];
           $cv->post_name = $request['post_name'];
           $cv->select_post=$request['select_post'];
           $cv->ssc_name=$request['ssc_name'];
           $cv->ssc_gpa=$request['ssc_gpa'];
           $cv->hsc_name=$request['hsc_name'];
           $cv->hsc_gpa=$request['hsc_gpa'];
           $cv->bsc_name=$request['bsc_name'];
           $cv->bsc_gpa=$request['bsc_gpa'];
           $cv->msc_name=$request['msc_name'];
           $cv->msc_gpa=$request['msc_gpa'];
           $cv->user_id=Auth::user()->id;
           $cv->save();
            return redirect()->route('submitfinancecv');
      
   }
       public function getShowFinanceCv()
    {
    	return view('html.show');
    }


    public function showFinanceCv()

    {
    	$financeCvs = FinanceCv::all();
    	return view('admin.showFinanceCv', ['financeCvs'=>$financeCvs]);
    }

}
