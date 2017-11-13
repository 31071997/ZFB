<?php

namespace App\Http\Controllers;


use App\User;
use App\Http\Controllers\Controller;
class appController extends Controller
{
    public function getHomePage()
    {
        return view('html.homepage');
    }
    public function home()
    {
        return view('html.circularlist');
    }
    public function circular()
    {
         return view('html.circular');
    }
    public function financeAnDaccountes()
    {
        return view('html.finance&accounts');
    }
    public function ProgrammingAnDTesting()
    {
        return view('html.Programming&testing');
    }
    public function GraphicsAnDDesign()
    {
        return view('html.Graphics&designing');
    }
    public function ManagementAnDHR()
    {
        return view('html.Management&HR');
    }
    public function PlanningAnDanalysis()
    {
        return view('html.Planning&analysis');
    }
    public function ViewCircular()
    {
        return view('html.circularlist');
    }
    public function FinamceANDaccpuntCV()
    {
        return view('html.Finamce&accpuntCV');
    }
    public function GraphicsANDdesigningCV()
    {
        return view('html.Graphics&designingCV');
    }
    public function ManagementANDHRCV()
    {
        return view('html.Management&HRCV');
    }
    public function PlanningANDanalysisCV()
    {
        return view('html.Planning&analysisCV');
    }
    public function ProgrammingANDtestingCV()
    {
        return view('html.Programming&testingCV');
    }
    public function GetCard()
    {
        $cards =  ProgrammingCv::all();
        return view('html.card', ['cards'=>$cards]);
    }

    public function GetContact()
    {
        return view('html.contact');
    }
    /*public function apply()
    {
        return view('html.CV');
    }*/


    public function adminDashboard()
    {
        return view('admin.programming&testing');
    }
}
