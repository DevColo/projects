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

class NimbaDistController extends Controller
{
    //
    public function dist1(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Nimba')
            ->where('members.district', '=',1)
            ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('nimbaDist1',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('nimbaDist1.pdf');
    }

    public function dist2(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Nimba')
            ->where('members.district', '=',2)
            ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('nimbaDist2',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('nimbaDist2.pdf');
    }

    public function dist3(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Nimba')
            ->where('members.district', '=',3)
            ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('nimbaDist3',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('nimbaDist3.pdf');
    }

    public function dist4(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Nimba')
            ->where('members.district', '=',4)
            ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('nimbaDist4',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('nimbaDist4.pdf');
    }

    public function dist5(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Nimba')
            ->where('members.district', '=',5)
            ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('nimbaDist5',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('nimbaDist5.pdf');
    }

    public function dist6(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Nimba')
            ->where('members.district', '=',6)
            ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('nimbaDist6',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('nimbaDist6.pdf');
    }

    public function dist7(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Nimba')
            ->where('members.district', '=',7)
            ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('nimbaDist7',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('nimbaDist7.pdf');
    }

    public function dist8(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Nimba')
            ->where('members.district', '=',8)
            ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('nimbaDist8',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('nimbaDist8.pdf');
    }

    public function dist9(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Nimba')
            ->where('members.district', '=',9)
            ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('nimbaDist9',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('nimbaDist9.pdf');
    }
}
