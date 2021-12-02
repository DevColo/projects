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

class AgeGroupController extends Controller
{
    //
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$bomiAge1 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Bomi')
            ->where('members.age', '>', 17)
            ->where('members.age', '<', 25)
            ->count();
        $bomiAge2 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Bomi')
            ->where('members.age', '>', 24)
            ->where('members.age', '<', 31)
            ->count();
        $bomiAge3 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Bomi')
            ->where('members.age', '>', 30)
            ->where('members.age', '<', 41)
            ->count();
        $bomiAge4 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Bomi')
            ->where('members.age', '>', 40)
            ->count();

        $bongAge1 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Bong')
            ->where('members.age', '>', 17)
            ->where('members.age', '<', 25)
            ->count();
        $bongAge2 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Bong')
            ->where('members.age', '>', 24)
            ->where('members.age', '<', 31)
            ->count();
        $bongAge3 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Bong')
            ->where('members.age', '>', 30)
            ->where('members.age', '<', 41)
            ->count();
        $bongAge4 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Bong')
            ->where('members.age', '>', 40)
            ->count();

        $gbarpoluAge1 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Gbarpolu')
            ->where('members.age', '>', 17)
            ->where('members.age', '<', 25)
            ->count();
        $gbarpoluAge2 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Gbarpolu')
            ->where('members.age', '>', 24)
            ->where('members.age', '<', 31)
            ->count();
        $gbarpoluAge3 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Gbarpolu')
            ->where('members.age', '>', 30)
            ->where('members.age', '<', 41)
            ->count();
        $gbarpoluAge4 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Gbarpolu')
            ->where('members.age', '>', 40)
            ->count();

        $bassaAge1 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Grand-Bassa')
            ->where('members.age', '>', 17)
            ->where('members.age', '<', 25)
            ->count();
        $bassaAge2 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Grand-Bassa')
            ->where('members.age', '>', 24)
            ->where('members.age', '<', 31)
            ->count();
        $bassaAge3 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Grand-Bassa')
            ->where('members.age', '>', 30)
            ->where('members.age', '<', 41)
            ->count();
        $bassaAge4 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Grand-Bassa')
            ->where('members.age', '>', 40)
            ->count();

        $capeAge1 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Grand-Cape-Mount')
            ->where('members.age', '>', 17)
            ->where('members.age', '<', 25)
            ->count();
        $capeAge2 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Grand-Cape-Mount')
            ->where('members.age', '>', 24)
            ->where('members.age', '<', 31)
            ->count();
        $capeAge3 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Grand-Cape-Mount')
            ->where('members.age', '>', 30)
            ->where('members.age', '<', 41)
            ->count();
        $capeAge4 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Grand-Cape-Mount')
            ->where('members.age', '>', 40)
            ->count();

        $gedehAge1 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Grand-Gedeh')
            ->where('members.age', '>', 17)
            ->where('members.age', '<', 25)
            ->count();
        $gedehAge2 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Grand-Gedeh')
            ->where('members.age', '>', 24)
            ->where('members.age', '<', 31)
            ->count();
        $gedehAge3 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Grand-Gedeh')
            ->where('members.age', '>', 30)
            ->where('members.age', '<', 41)
            ->count();
        $gedehAge4 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Grand-Gedeh')
            ->where('members.age', '>', 40)
            ->count();

        $kruAge1 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Grand-Kru')
            ->where('members.age', '>', 17)
            ->where('members.age', '<', 25)
            ->count();
        $kruAge2 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Grand-Kru')
            ->where('members.age', '>', 24)
            ->where('members.age', '<', 31)
            ->count();
        $kruAge3 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Grand-Kru')
            ->where('members.age', '>', 30)
            ->where('members.age', '<', 41)
            ->count();
        $kruAge4 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Grand-Kru')
            ->where('members.age', '>', 40)
            ->count();

        $lofaAge1 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Lofa')
            ->where('members.age', '>', 17)
            ->where('members.age', '<', 25)
            ->count();
        $lofaAge2 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Lofa')
            ->where('members.age', '>', 24)
            ->where('members.age', '<', 31)
            ->count();
        $lofaAge3 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Lofa')
            ->where('members.age', '>', 30)
            ->where('members.age', '<', 41)
            ->count();
        $lofaAge4 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Lofa')
            ->where('members.age', '>', 40)
            ->count();

        $margibiAge1 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Margibi')
            ->where('members.age', '>', 17)
            ->where('members.age', '<', 25)
            ->count();
        $margibiAge2 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Margibi')
            ->where('members.age', '>', 24)
            ->where('members.age', '<', 31)
            ->count();
        $margibiAge3 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Margibi')
            ->where('members.age', '>', 30)
            ->where('members.age', '<', 41)
            ->count();
        $margibiAge4 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Margibi')
            ->where('members.age', '>', 40)
            ->count();

        $maryAge1 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Maryland')
            ->where('members.age', '>', 17)
            ->where('members.age', '<', 25)
            ->count();
        $maryAge2 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Maryland')
            ->where('members.age', '>', 24)
            ->where('members.age', '<', 31)
            ->count();
        $maryAge3 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Maryland')
            ->where('members.age', '>', 30)
            ->where('members.age', '<', 41)
            ->count();
        $maryAge4 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Maryland')
            ->where('members.age', '>', 40)
            ->count();


        $montAge1 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.age', '>', 17)
            ->where('members.age', '<', 25)
            ->count();
        $montAge2 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.age', '>', 24)
            ->where('members.age', '<', 31)
            ->count();
        $montAge3 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.age', '>', 30)
            ->where('members.age', '<', 41)
            ->count();
        $montAge4 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Montserrado')
            ->where('members.age', '>', 40)
            ->count();

        $nimbaAge1 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Nimba')
            ->where('members.age', '>', 17)
            ->where('members.age', '<', 25)
            ->count();
        $nimbaAge2 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Nimba')
            ->where('members.age', '>', 24)
            ->where('members.age', '<', 31)
            ->count();
        $nimbaAge3 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Nimba')
            ->where('members.age', '>', 30)
            ->where('members.age', '<', 41)
            ->count();
        $nimbaAge4 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Nimba')
            ->where('members.age', '>', 40)
            ->count();

        $cessAge1 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'River-Cess')
            ->where('members.age', '>', 17)
            ->where('members.age', '<', 25)
            ->count();
        $cessAge2 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'River-Cess')
            ->where('members.age', '>', 24)
            ->where('members.age', '<', 31)
            ->count();
        $cessAge3 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'River-Cess')
            ->where('members.age', '>', 30)
            ->where('members.age', '<', 41)
            ->count();
        $cessAge4 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'River-Cess')
            ->where('members.age', '>', 40)
            ->count();

        $geeAge1 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'River-Gee')
            ->where('members.age', '>', 17)
            ->where('members.age', '<', 25)
            ->count();
        $geeAge2 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'River-Gee')
            ->where('members.age', '>', 24)
            ->where('members.age', '<', 31)
            ->count();
        $geeAge3 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'River-Gee')
            ->where('members.age', '>', 30)
            ->where('members.age', '<', 41)
            ->count();
        $geeAge4 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'River-Gee')
            ->where('members.age', '>', 40)
            ->count();

        $sinoeAge1 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Sinoe')
            ->where('members.age', '>', 17)
            ->where('members.age', '<', 25)
            ->count();
        $sinoeAge2 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Sinoe')
            ->where('members.age', '>', 24)
            ->where('members.age', '<', 31)
            ->count();
        $sinoeAge3 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Sinoe')
            ->where('members.age', '>', 30)
            ->where('members.age', '<', 41)
            ->count();
        $sinoeAge4 = DB::table('members')
            ->join('users', 'users.id','=','members.admin_id' )
            ->where('members.county', '=', 'Sinoe')
            ->where('members.age', '>', 40)
            ->count();
    	return view('ageGroup', compact('bomiAge1','bomiAge2','bomiAge3','bomiAge4', 'bongAge1','bongAge2','bongAge3','bongAge4', 'gbarpoluAge1','gbarpoluAge2','gbarpoluAge3','gbarpoluAge4', 'bassaAge1','bassaAge2','bassaAge3','bassaAge4', 'capeAge1','capeAge2','capeAge3','capeAge4', 'gedehAge1','gedehAge2','gedehAge3','gedehAge4', 'kruAge1','kruAge2','kruAge3','kruAge4', 'lofaAge1','lofaAge2','lofaAge3','lofaAge4', 'margibiAge1','margibiAge2','margibiAge3','margibiAge4', 'maryAge1','maryAge2','maryAge3','maryAge4', 'montAge1','montAge2','montAge3','montAge4', 'nimbaAge1','nimbaAge2','nimbaAge3','nimbaAge4', 'cessAge1','cessAge2','cessAge3','cessAge4', 'geeAge1','geeAge2','geeAge3','geeAge4', 'sinoeAge1','sinoeAge2','sinoeAge3','sinoeAge4'));
    }
}
