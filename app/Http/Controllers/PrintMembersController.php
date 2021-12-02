<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Members;
use PDF;
use DB;

class PrintMembersController extends Controller
{
    //
    public function getPDF(){
    	//storing all data from the model Members to the variable $member
    	 $member = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();

    	//Displaying the view(page) called members
    	$pdf=PDF::loadView('members',['member'=>$member]);

        //converting the view(page) called members to a pdf file in the browser
    	return $pdf->stream('members.pdf');
    }
}
