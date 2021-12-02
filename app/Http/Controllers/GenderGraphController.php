<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members;
use DB;

class GenderGraphController extends Controller
{
    //
     public function echart(Request $request)
    {
    	$female = Members::where('gender','female')->count();

    	$male = Members::where('gender','male')->count();

    	// $female_count = count($female);    	

    	// $male_count = count($male);

    	return view('home',compact('female','male'));
    }
}
