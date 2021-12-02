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

class CountyAdminController extends Controller
{
    //
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$data = DB::table('users')
              ->select('users.photo', 'users.name', 'users.county', 'users.district','users.email' )
              ->get();

        return view('adminList', compact('data'));
    }

    public function getPDF(){
        //storing all data from the model Members to the variable $member
        //$member = Members::all();
         $admin = DB::table('users')
            ->select('users.id','users.name', 'users.county', 'users.district','users.email' )
              ->get();
        //Displaying the view(page) called members
        $pdf=PDF::loadView('adminRooster',['admin'=>$admin]);

        //converting the view(page) called members to a pdf file in the browser
        return $pdf->stream('adminRooster.pdf');
    }
}
