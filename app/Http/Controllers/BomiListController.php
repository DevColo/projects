<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminMembers;
use App\Members;
use App\User;
use Auth;
use DB;
use DataTables;
use PDF;

class BomiListController extends Controller
{
    //
    public function index(){

    $data = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Bomi')
            ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    return view('bomiMembers', compact('data'));
    }
}