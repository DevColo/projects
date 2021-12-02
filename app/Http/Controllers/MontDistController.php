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

class MontDistController extends Controller
{
    //
     public function dist1(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.district', '=',1)
           ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('montDist1',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('montDist1.pdf');
    }

    public function dist2(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.district', '=',2)
           ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('montDist2',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('montDist2.pdf');
    }

    public function dist3(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.district', '=',3)
           ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('montDist3',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('montDist3.pdf');
    }

    public function dist4(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.district', '=',4)
           ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('montDist4',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('montDist4.pdf');
    }

    public function dist5(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.district', '=',5)
           ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('montDist5',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('montDist5.pdf');
    }

    public function dist6(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.district', '=',6)
           ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('montDist6',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('montDist6.pdf');
    }

    public function dist7(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.district', '=',7)
           ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('montDist7',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('montDist7.pdf');
    }

    public function dist8(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.district', '=',8)
           ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('montDist8',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('montDist8.pdf');
    }

    public function dist9(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.district', '=',9)
           ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('montDist9',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('montDist9.pdf');
    }

    public function dist10(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.district', '=',10)
           ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('montDist10',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('montDist10.pdf');
    }

    public function dist11(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.district', '=',11)
           ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('montDist11',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('montDist11.pdf');
    }

    public function dist12(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.district', '=',12)
           ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('montDist12',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('montDist12.pdf');
    }

    public function dist13(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.district', '=',13)
           ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('montDist13',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('montDist13.pdf');
    }

    public function dist14(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.district', '=',14)
           ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('montDist14',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('montDist14.pdf');
    }

    public function dist15(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.district', '=',15)
           ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('montDist15',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('montDist15.pdf');
    }

    public function dist16(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.district', '=',16)
           ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('montDist16',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('montDist16.pdf');
    }

    public function dist17(){
    	//storing all data from the model Members to the variable $member
    	//$member = Members::all();
         $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.district', '=',17)
           ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('montDist17',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('montDist17.pdf');
    }
}
