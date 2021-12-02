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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $Total = DB::table('members')
            ->join('admin_members','admin_members.member_id', '=', 'members.id')
            ->join('users', 'users.id','=','members.admin_id' )
            ->count();
        $Female = DB::table('members')
            ->join('admin_members','admin_members.member_id', '=', 'members.id')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.gender', '=', 'female')
            ->count();
        $Male = DB::table('members')
            ->join('admin_members','admin_members.member_id', '=', 'members.id')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.gender', '=', 'male')
            ->count();

        $ageGroup1 = DB::table('members')
            ->join('admin_members','admin_members.member_id', '=', 'members.id')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.age', '>', 17)
            ->where('members.age', '<', 25)
            ->count();

        $ageGroup2 = DB::table('members')
            ->join('admin_members','admin_members.member_id', '=', 'members.id')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.age', '>', 24)
            ->where('members.age', '<', 31)
            ->count();

        $ageGroup3 = DB::table('members')
            ->join('admin_members','admin_members.member_id', '=', 'members.id')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.age', '>', 30)
            ->where('members.age', '<', 41)
            ->count();

        $ageGroup4 = DB::table('members')
            ->join('admin_members','admin_members.member_id', '=', 'members.id')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.age', '>', 40)
            ->count();
        return view('home', compact('Total','Female','Male', 'ageGroup1', 'ageGroup2', 'ageGroup3', 'ageGroup4'));
    }
}
