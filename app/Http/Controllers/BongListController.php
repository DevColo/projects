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

class BongListController extends Controller
{
    //
    public function index(){

    $data = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Bong')
            ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    return view('bongMembers', compact('data'));
    }
}