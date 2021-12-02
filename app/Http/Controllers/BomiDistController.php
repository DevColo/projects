<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminMembers;
use App\Members;
use App\User;
use Auth;
use DB;
use DataTables;
use PDF;

class BomiDistController extends Controller
{
    //
    public function dist1(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Bomi')
            ->where('members.district', '=',1)
            ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('bomiDist1',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('bomiDist1.pdf');
    }

     public function dist2(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Bomi')
            ->where('members.district', '=',2)
            ->select('members.member_id', 'members.fname', 'members.lname','members.gender', 'birthDate', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('bomiDist2',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('bomiDist2.pdf');
    }

    public function dist3(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Bomi')
            ->where('members.district', '=',3)
            ->select('members.member_id', 'members.fname', 'members.lname','members.gender', 'birthDate', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('bomiDist3',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('bomiDist3.pdf');
    }
}
