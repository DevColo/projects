<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapeMountDistController extends Controller
{
    //
     public function dist1(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Grand-Cape-Mount')
            ->where('members.district', '=',1)
            ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('capeDist1',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('capeDist1.pdf');
    }

     public function dist2(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Grand-Cape-Mount')
            ->where('members.district', '=',2)
            ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('capeDist2',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('capeDist2.pdf');
    }

    public function dist3(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Grand-Cape-Mount')
            ->where('members.district', '=',3)
            ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('capeDist3',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('capeDist3.pdf');
}
}
