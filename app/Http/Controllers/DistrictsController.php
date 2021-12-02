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

class DistrictsController extends Controller
{
    //
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$bomi1 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bomi')
    	              ->where('members.district','=',1)
    	              ->count();
    	$bomi1f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bomi')
    	              ->where('members.district','=',1)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$bomi1m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bomi')
    	              ->where('members.district','=',1)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$bomi2 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bomi')
    	              ->where('members.district','=',2)
    	              ->count();
    	$bomi2f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bomi')
    	              ->where('members.district','=',2)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$bomi2m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bomi')
    	              ->where('members.district','=',2)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$bomi3 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bomi')
    	              ->where('members.district','=',3)
    	              ->count();
    	$bomi3f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bomi')
    	              ->where('members.district','=',3)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$bomi3m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bomi')
    	              ->where('members.district','=',3)
    	              ->where('members.gender','=','male')
    	              ->count();


    	$bong1 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',1)
    	              ->count();
    	$bong1f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',1)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$bong1m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',1)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$bong2 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',2)
    	              ->count();
    	$bong2f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',2)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$bong2m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',2)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$bong3 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',3)
    	              ->count();
    	$bong3f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',3)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$bong3m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',3)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$bong4 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',4)
    	              ->count();
    	$bong4f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',4)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$bong4m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',4)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$bong5 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',5)
    	              ->count();
    	$bong5f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',5)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$bong5m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',5)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$bong6 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',6)
    	              ->count();
    	$bong6f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',6)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$bong6m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',6)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$bong7 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',7)
    	              ->count();
    	$bong7f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',7)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$bong7m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.district','=',7)
    	              ->where('members.gender','=','male')
    	              ->count();


    	$gbarpolu1 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Gbarpolu')
    	              ->where('members.district','=',1)
    	              ->count();
    	$gbarpolu1f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Gbarpolu')
    	              ->where('members.district','=',1)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$gbarpolu1m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Gbarpolu')
    	              ->where('members.district','=',1)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$gbarpolu2 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Gbarpolu')
    	              ->where('members.district','=',2)
    	              ->count();
    	$gbarpolu2f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Gbarpolu')
    	              ->where('members.district','=',2)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$gbarpolu2m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Gbarpolu')
    	              ->where('members.district','=',2)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$gbarpolu3 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Gbarpolu')
    	              ->where('members.district','=',3)
    	              ->count();
    	$gbarpolu3f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Gbarpolu')
    	              ->where('members.district','=',3)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$gbarpolu3m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Gbarpolu')
    	              ->where('members.district','=',3)
    	              ->where('members.gender','=','male')
    	              ->count();



    	$bassa1 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Bassa')
    	              ->where('members.district','=',1)
    	              ->count();
    	$bassa1f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Bassa')
    	              ->where('members.district','=',1)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$bassa1m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Bassa')
    	              ->where('members.district','=',1)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$bassa2 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Bassa')
    	              ->where('members.district','=',2)
    	              ->count();
    	$bassa2f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Bassa')
    	              ->where('members.district','=',2)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$bassa2m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Bassa')
    	              ->where('members.district','=',2)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$bassa3 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Bassa')
    	              ->where('members.district','=',3)
    	              ->count();
    	$bassa3f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Bassa')
    	              ->where('members.district','=',3)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$bassa3m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Bassa')
    	              ->where('members.district','=',3)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$bassa4 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Bassa')
    	              ->where('members.district','=',4)
    	              ->count();
    	$bassa4f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Bassa')
    	              ->where('members.district','=',4)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$bassa4m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Bassa')
    	              ->where('members.district','=',4)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$bassa5 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Bassa')
    	              ->where('members.district','=',5)
    	              ->count();
    	$bassa5f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Bassa')
    	              ->where('members.district','=',5)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$bassa5m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Bassa')
    	              ->where('members.district','=',5)
    	              ->where('members.gender','=','male')
    	              ->count();


        $cape1 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Cape-Mount')
    	              ->where('members.district','=',1)
    	              ->count();
    	$cape1f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Cape-Mount')
    	              ->where('members.district','=',1)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$cape1m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Cape-Mount')
    	              ->where('members.district','=',1)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$cape2 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Cape-Mount')
    	              ->where('members.district','=',2)
    	              ->count();
    	$cape2f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Cape-Mount')
    	              ->where('members.district','=',2)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$cape2m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Cape-Mount')
    	              ->where('members.district','=',2)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$cape3 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Cape-Mount')
    	              ->where('members.district','=',3)
    	              ->count();
    	$cape3f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Cape-Mount')
    	              ->where('members.district','=',3)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$cape3m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Cape-Mount')
    	              ->where('members.district','=',3)
    	              ->where('members.gender','=','male')
    	              ->count();


    	$gedeh1 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Gedeh')
    	              ->where('members.district','=',1)
    	              ->count();
    	$gedeh1f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Gedeh')
    	              ->where('members.district','=',1)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$gedeh1m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Gedeh')
    	              ->where('members.district','=',1)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$gedeh2 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Gedeh')
    	              ->where('members.district','=',2)
    	              ->count();
    	$gedeh2f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Gedeh')
    	              ->where('members.district','=',2)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$gedeh2m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Gedeh')
    	              ->where('members.district','=',2)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$gedeh3 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Gedeh')
    	              ->where('members.district','=',3)
    	              ->count();
    	$gedeh3f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Gedeh')
    	              ->where('members.district','=',3)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$gedeh3m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Gedeh')
    	              ->where('members.district','=',3)
    	              ->where('members.gender','=','male')
    	              ->count();


    	$kru1 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Kru')
    	              ->where('members.district','=',1)
    	              ->count();
    	$kru1f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Kru')
    	              ->where('members.district','=',1)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$kru1m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Kru')
    	              ->where('members.district','=',1)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$kru2 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Kru')
    	              ->where('members.district','=',2)
    	              ->count();
    	$kru2f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Kru')
    	              ->where('members.district','=',2)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$kru2m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Kru')
    	              ->where('members.district','=',2)
    	              ->where('members.gender','=','male')
    	              ->count();


    	$lofa1 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Lofa')
    	              ->where('members.district','=',1)
    	              ->count();
    	$lofa1f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Lofa')
    	              ->where('members.district','=',1)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$lofa1m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Lofa')
    	              ->where('members.district','=',1)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$lofa2 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Lofa')
    	              ->where('members.district','=',2)
    	              ->count();
    	$lofa2f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Lofa')
    	              ->where('members.district','=',2)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$lofa2m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Lofa')
    	              ->where('members.district','=',2)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$lofa3 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Lofa')
    	              ->where('members.district','=',3)
    	              ->count();
    	$lofa3f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Lofa')
    	              ->where('members.district','=',3)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$lofa3m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Lofa')
    	              ->where('members.district','=',3)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$lofa4 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Lofa')
    	              ->where('members.district','=',4)
    	              ->count();
    	$lofa4f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Lofa')
    	              ->where('members.district','=',4)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$lofa4m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Lofa')
    	              ->where('members.district','=',4)
    	              ->where('members.gender','=','male')
    	              ->count();

    	$lofa5 = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Lofa')
    	              ->where('members.district','=',5)
    	              ->count();
    	$lofa5f = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Lofa')
    	              ->where('members.district','=',5)
    	              ->where('members.gender','=','female')
    	              ->count();
    	$lofa5m = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Lofa')
    	              ->where('members.district','=',5)
    	              ->where('members.gender','=','male')
    	              ->count();


        $Margibi1 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Margibi')
                      ->where('members.district','=',1)
                      ->count();
        $Margibi1f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Margibi')
                      ->where('members.district','=',1)
                      ->where('members.gender','=','female')
                      ->count();
        $Margibi1m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Margibi')
                      ->where('members.district','=',1)
                      ->where('members.gender','=','male')
                      ->count();

        $Margibi2 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Margibi')
                      ->where('members.district','=',2)
                      ->count();
        $Margibi2f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Margibi')
                      ->where('members.district','=',2)
                      ->where('members.gender','=','female')
                      ->count();
        $Margibi2m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Margibi')
                      ->where('members.district','=',2)
                      ->where('members.gender','=','male')
                      ->count();

        $Margibi3 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Margibi')
                      ->where('members.district','=',3)
                      ->count();
        $Margibi3f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Margibi')
                      ->where('members.district','=',3)
                      ->where('members.gender','=','female')
                      ->count();
        $Margibi3m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Margibi')
                      ->where('members.district','=',3)
                      ->where('members.gender','=','male')
                      ->count();

        $Margibi4 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Margibi')
                      ->where('members.district','=',4)
                      ->count();
        $Margibi4f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Margibi')
                      ->where('members.district','=',4)
                      ->where('members.gender','=','female')
                      ->count();
        $Margibi4m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Margibi')
                      ->where('members.district','=',4)
                      ->where('members.gender','=','male')
                      ->count();

        $Margibi5 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Margibi')
                      ->where('members.district','=',5)
                      ->count();
        $Margibi5f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Margibi')
                      ->where('members.district','=',5)
                      ->where('members.gender','=','female')
                      ->count();
        $Margibi5m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Margibi')
                      ->where('members.district','=',5)
                      ->where('members.gender','=','male')
                      ->count();


        $mont1 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',1)
                      ->count();
        $mont1f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',1)
                      ->where('members.gender','=','female')
                      ->count();
        $mont1m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',1)
                      ->where('members.gender','=','male')
                      ->count();

        $mont2 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',2)
                      ->count();
        $mont2f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',2)
                      ->where('members.gender','=','female')
                      ->count();
        $mont2m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',2)
                      ->where('members.gender','=','male')
                      ->count();

        $mont3 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',3)
                      ->count();
        $mont3f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',3)
                      ->where('members.gender','=','female')
                      ->count();
        $mont3m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',3)
                      ->where('members.gender','=','male')
                      ->count();

        $mont4 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',4)
                      ->count();
        $mont4f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',4)
                      ->where('members.gender','=','female')
                      ->count();
        $mont4m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',4)
                      ->where('members.gender','=','male')
                      ->count();

        $mont5 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',5)
                      ->count();
        $mont5f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',5)
                      ->where('members.gender','=','female')
                      ->count();
        $mont5m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',5)
                      ->where('members.gender','=','male')
                      ->count();

        $mont6 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',6)
                      ->count();
        $mont6f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',6)
                      ->where('members.gender','=','female')
                      ->count();
        $mont6m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',6)
                      ->where('members.gender','=','male')
                      ->count();

        $mont7 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',7)
                      ->count();
        $mont7f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',7)
                      ->where('members.gender','=','female')
                      ->count();
        $mont7m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',7)
                      ->where('members.gender','=','male')
                      ->count();

        $mont8 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',8)
                      ->count();
        $mont8f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',8)
                      ->where('members.gender','=','female')
                      ->count();
        $mont8m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',8)
                      ->where('members.gender','=','male')
                      ->count();

        $mont9 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',9)
                      ->count();
        $mont9f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',9)
                      ->where('members.gender','=','female')
                      ->count();
        $mont9m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',9)
                      ->where('members.gender','=','male')
                      ->count();

        $mont10 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',10)
                      ->count();
        $mont10f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',10)
                      ->where('members.gender','=','female')
                      ->count();
        $mont10m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',10)
                      ->where('members.gender','=','male')
                      ->count();

        $mont11 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',11)
                      ->count();
        $mont11f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',11)
                      ->where('members.gender','=','female')
                      ->count();
        $mont11m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',11)
                      ->where('members.gender','=','male')
                      ->count();

        $mont12 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',12)
                      ->count();
        $mont12f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',12)
                      ->where('members.gender','=','female')
                      ->count();
        $mont12m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',12)
                      ->where('members.gender','=','male')
                      ->count();

        $mont13 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',13)
                      ->count();
        $mont13f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',13)
                      ->where('members.gender','=','female')
                      ->count();
        $mont13m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',13)
                      ->where('members.gender','=','male')
                      ->count();

        $mont14 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',14)
                      ->count();
        $mont14f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',14)
                      ->where('members.gender','=','female')
                      ->count();
        $mont14m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',14)
                      ->where('members.gender','=','male')
                      ->count();

        $mont15 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',15)
                      ->count();
        $mont15f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',15)
                      ->where('members.gender','=','female')
                      ->count();
        $mont15m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',15)
                      ->where('members.gender','=','male')
                      ->count();

        $mont16 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',16)
                      ->count();
        $mont16f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',16)
                      ->where('members.gender','=','female')
                      ->count();
        $mont16m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',16)
                      ->where('members.gender','=','male')
                      ->count();

        $mont17 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',17)
                      ->count();
        $mont17f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',17)
                      ->where('members.gender','=','female')
                      ->count();
        $mont17m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.district','=',17)
                      ->where('members.gender','=','male')
                      ->count();


        $nimba1 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',1)
                      ->count();
        $nimba1f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',1)
                      ->where('members.gender','=','female')
                      ->count();
        $nimba1m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',1)
                      ->where('members.gender','=','male')
                      ->count();

        $nimba2 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',2)
                      ->count();
        $nimba2f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',2)
                      ->where('members.gender','=','female')
                      ->count();
        $nimba2m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',2)
                      ->where('members.gender','=','male')
                      ->count();

        $nimba3 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',3)
                      ->count();
        $nimba3f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',3)
                      ->where('members.gender','=','female')
                      ->count();
        $nimba3m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',3)
                      ->where('members.gender','=','male')
                      ->count();

        $nimba4 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',4)
                      ->count();
        $nimba4f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',4)
                      ->where('members.gender','=','female')
                      ->count();
        $nimba4m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',4)
                      ->where('members.gender','=','male')
                      ->count();

        $nimba5 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',5)
                      ->count();
        $nimba5f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',5)
                      ->where('members.gender','=','female')
                      ->count();
        $nimba5m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',5)
                      ->where('members.gender','=','male')
                      ->count();

        $nimba6 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',6)
                      ->count();
        $nimba6f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',6)
                      ->where('members.gender','=','female')
                      ->count();
        $nimba6m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',6)
                      ->where('members.gender','=','male')
                      ->count();

        $nimba7 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',7)
                      ->count();
        $nimba7f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',7)
                      ->where('members.gender','=','female')
                      ->count();
        $nimba7m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',7)
                      ->where('members.gender','=','male')
                      ->count();

        $nimba8 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',8)
                      ->count();
        $nimba8f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',8)
                      ->where('members.gender','=','female')
                      ->count();
        $nimba8m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',8)
                      ->where('members.gender','=','male')
                      ->count();

        $nimba9 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',9)
                      ->count();
        $nimba9f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',9)
                      ->where('members.gender','=','female')
                      ->count();
        $nimba9m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.district','=',9)
                      ->where('members.gender','=','male')
                      ->count();


         $cess1 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Cess')
                      ->where('members.district','=',1)
                      ->count();
        $cess1f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Cess')
                      ->where('members.district','=',1)
                      ->where('members.gender','=','female')
                      ->count();
        $cess1m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Cess')
                      ->where('members.district','=',1)
                      ->where('members.gender','=','male')
                      ->count();

        $cess2 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Cess')
                      ->where('members.district','=',2)
                      ->count();
        $cess2f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Cess')
                      ->where('members.district','=',2)
                      ->where('members.gender','=','female')
                      ->count();
        $cess2m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Cess')
                      ->where('members.district','=',2)
                      ->where('members.gender','=','male')
                      ->count();


        $gee1 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Gee')
                      ->where('members.district','=',1)
                      ->count();
        $gee1f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Gee')
                      ->where('members.district','=',1)
                      ->where('members.gender','=','female')
                      ->count();
        $gee1m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Gee')
                      ->where('members.district','=',1)
                      ->where('members.gender','=','male')
                      ->count();

        $gee2 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Gee')
                      ->where('members.district','=',2)
                      ->count();
        $gee2f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Gee')
                      ->where('members.district','=',2)
                      ->where('members.gender','=','female')
                      ->count();
        $gee2m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Gee')
                      ->where('members.district','=',2)
                      ->where('members.gender','=','male')
                      ->count();

        $gee3 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Gee')
                      ->where('members.district','=',3)
                      ->count();
        $gee3f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Gee')
                      ->where('members.district','=',3)
                      ->where('members.gender','=','female')
                      ->count();
        $gee3m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Gee')
                      ->where('members.district','=',3)
                      ->where('members.gender','=','male')
                      ->count();


        $sinoe1 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Sinoe')
                      ->where('members.district','=',1)
                      ->count();
        $sinoe1f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Sinoe')
                      ->where('members.district','=',1)
                      ->where('members.gender','=','female')
                      ->count();
        $sinoe1m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Sinoe')
                      ->where('members.district','=',1)
                      ->where('members.gender','=','male')
                      ->count();

        $sinoe2 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Sinoe')
                      ->where('members.district','=',2)
                      ->count();
        $sinoe2f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Sinoe')
                      ->where('members.district','=',2)
                      ->where('members.gender','=','female')
                      ->count();
        $sinoe2m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Sinoe')
                      ->where('members.district','=',2)
                      ->where('members.gender','=','male')
                      ->count();

        $sinoe3 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Sinoe')
                      ->where('members.district','=',3)
                      ->count();
        $sinoe3f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Sinoe')
                      ->where('members.district','=',3)
                      ->where('members.gender','=','female')
                      ->count();
        $sinoe3m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Sinoe')
                      ->where('members.district','=',3)
                      ->where('members.gender','=','male')
                      ->count();


        $mary1 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Maryland')
                      ->where('members.district','=',1)
                      ->count();
        $mary1f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Maryland')
                      ->where('members.district','=',1)
                      ->where('members.gender','=','female')
                      ->count();
        $mary1m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Maryland')
                      ->where('members.district','=',1)
                      ->where('members.gender','=','male')
                      ->count();

        $mary2 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Maryland')
                      ->where('members.district','=',2)
                      ->count();
        $mary2f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Maryland')
                      ->where('members.district','=',2)
                      ->where('members.gender','=','female')
                      ->count();
        $mary2m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Maryland')
                      ->where('members.district','=',2)
                      ->where('members.gender','=','male')
                      ->count();

        $mary3 = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Maryland')
                      ->where('members.district','=',3)
                      ->count();
        $mary3f = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Maryland')
                      ->where('members.district','=',3)
                      ->where('members.gender','=','female')
                      ->count();
        $mary3m = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Maryland')
                      ->where('members.district','=',3)
                      ->where('members.gender','=','male')
                      ->count();
    	return view('districts', compact('bomi1','bomi1f','bomi1m','bomi2','bomi2f','bomi2m','bomi3','bomi3f','bomi3m','bong1','bong1f','bong1m','bong2','bong2f','bong2m','bong3','bong3f','bong3m','bong4','bong4f','bong4m','bong5','bong5f','bong5m','bong6','bong6f','bong6m','bong7','bong7f','bong7m','gbarpolu1','gbarpolu1f','gbarpolu1m','gbarpolu2','gbarpolu2f','gbarpolu2m','gbarpolu3','gbarpolu3f','gbarpolu3m','bassa1','bassa1f','bassa1m','bassa2','bassa2f','bassa2m','bassa3','bassa3f','bassa3m','bassa4','bassa4f','bassa4m','bassa5','bassa5f','bassa5m','cape1','cape1f','cape1m','cape2','cape2f','cape2m','cape3','cape3f','cape3m','gedeh1','gedeh1f','gedeh1m','gedeh2','gedeh2f','gedeh2m','gedeh3','gedeh3f','gedeh3m','kru1','kru1f','kru1m','kru2','kru2f','kru2m','lofa1','lofa1f','lofa1m','lofa2','lofa2f','lofa2m','lofa3','lofa3f','lofa3m','lofa4','lofa4f','lofa4m','lofa5','lofa5f','lofa5m','Margibi1','Margibi1f','Margibi1m','Margibi2','Margibi2f','Margibi2m','Margibi3','Margibi3f','Margibi3m','Margibi4','Margibi4f','Margibi4m','Margibi5','Margibi5f','Margibi5m','mont1','mont1f','mont1m','mont2','mont2f','mont2m','mont3','mont3f','mont3m','mont4','mont4f','mont4m','mont5','mont5f','mont5m','mont6','mont6f','mont6m','mont7','mont7f','mont7m','mont8','mont8f','mont8m','mont9','mont9f','mont9m','mont10','mont10f','mont10m','mont11','mont11f','mont11m','mont12','mont12f','mont12m','mont13','mont13f','mont13m','mont14','mont14f','mont14m','mont15','mont15f','mont15m','mont16','mont16f','mont16m','mont17','mont17f','mont17m','nimba1','nimba1f','nimba1m','nimba2','nimba2f','nimba2m','nimba3','nimba3f','nimba3m','nimba4','nimba4f','nimba4m','nimba5','nimba5f','nimba5m','nimba6','nimba6f','nimba6m','nimba7','nimba7f','nimba7m','nimba8','nimba8f','nimba8m','nimba9','nimba9f','nimba9m','cess1','cess1f','cess1m','cess2','cess2f','cess2m','gee1','gee1f','gee1m','gee2','gee2f','gee2m','gee3','gee3f','gee3m','sinoe1','sinoe1f','sinoe1m','sinoe2','sinoe2f','sinoe2m','sinoe3','sinoe3f','sinoe3m','mary1','mary1f','mary1m','mary2','mary2f','mary2m','mary3','mary3f','mary3m'));
    }
}
