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


class MembersListController extends Controller
{
    //

    public function index(){

    $data = DB::table('members')
            ->join('admin_members','admin_members.member_id', '=', 'members.id')
            ->join('users', 'users.id','=','members.admin_id' )
            ->select('members.member_id', 'members.fname','members.lname','members.gender','members.voterID','age', 'members.county', 'members.district','members.cell','members.email' )
            ->get();
    return view('membersList', compact('data'));
    }

}
