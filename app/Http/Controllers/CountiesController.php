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

class CountiesController extends Controller
{
    //
    public function __construct(){
    	$this->middleware('auth');
    }

    public function display(){

    	$bomiAll = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bomi')
    	              ->count();
    	$bomiFemale = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bomi')
    	              ->where('members.gender','=','female')
    	              ->count();
    	$bomiMale = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bomi')
    	              ->where('members.gender','=','male')
    	              ->count();

    	$bongAll = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->count();
    	$bongFemale = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.gender','=','female')
    	              ->count();
    	$bongMale = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Bong')
    	              ->where('members.gender','=','male')
    	              ->count();

    	$gbarpoluAll = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Gbarpolu')
    	              ->count();
    	$gbarpoluFemale = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Gbarpolu')
    	              ->where('members.gender','=','female')
    	              ->count();
    	$gbarpoluMale = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Gbarpolu')
    	              ->where('members.gender','=','male')
    	              ->count();

    	$bassaAll = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Bassa')
    	              ->count();
    	$bassaFemale = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Bassa')
    	              ->where('members.gender','=','female')
    	              ->count();
    	$bassaMale = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Bassa')
    	              ->where('members.gender','=','male')
    	              ->count();

    	$capeAll = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Cape-Mount')
    	              ->count();
    	$capeFemale = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Cape-Mount')
    	              ->where('members.gender','=','female')
    	              ->count();
    	$capeMale = DB::table('members')
    	              ->join('users', 'users.id','=','members.admin_id')
    	              ->where('members.county','=','Grand-Cape-Mount')
    	              ->where('members.gender','=','male')
    	              ->count();

        $gedehAll = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Grand-Gedeh')
                      ->count();
        $gedehFemale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Grand-Gedeh')
                      ->where('members.gender','=','female')
                      ->count();
        $gedehMale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Grand-Gedeh')
                      ->where('members.gender','=','male')
                      ->count();

        $kruAll = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Grand-Kru')
                      ->count();
        $kruFemale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Grand-Kru')
                      ->where('members.gender','=','female')
                      ->count();
        $kruMale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Grand-Kru')
                      ->where('members.gender','=','male')
                      ->count();

        $lofaAll = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Lofa')
                      ->count();
        $lofaFemale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Lofa')
                      ->where('members.gender','=','female')
                      ->count();
        $lofaMale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Lofa')
                      ->where('members.gender','=','male')
                      ->count();

        $margibiAll = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Margibi')
                      ->count();
        $margibiFemale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Margibi')
                      ->where('members.gender','=','female')
                      ->count();
        $margibiMale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Margibi')
                      ->where('members.gender','=','male')
                      ->count();

        $marylandAll = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Maryland')
                      ->count();
        $marylandFemale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Maryland')
                      ->where('members.gender','=','female')
                      ->count();
        $marylandMale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Maryland')
                      ->where('members.gender','=','male')
                      ->count();

        $montAll = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->count();
        $montFemale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.gender','=','female')
                      ->count();
        $montMale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Montserrado')
                      ->where('members.gender','=','male')
                      ->count();

        $nimbaAll = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->count();
        $nimbaFemale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.gender','=','female')
                      ->count();
        $nimbaMale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Nimba')
                      ->where('members.gender','=','male')
                      ->count();

        $cessAll = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Cess')
                      ->count();
        $cessFemale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Cess')
                      ->where('members.gender','=','female')
                      ->count();
        $cessMale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Cess')
                      ->where('members.gender','=','male')
                      ->count();

        $geeAll = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Gee')
                      ->count();
        $geeFemale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Gee')
                      ->where('members.gender','=','female')
                      ->count();
        $geeMale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','River-Gee')
                      ->where('members.gender','=','male')
                      ->count();

        $sinoeAll = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Sinoe')
                      ->count();
        $sinoeFemale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Sinoe')
                      ->where('members.gender','=','female')
                      ->count();
        $sinoeMale = DB::table('members')
                      ->join('users', 'users.id','=','members.admin_id')
                      ->where('members.county','=','Sinoe')
                      ->where('members.gender','=','male')
                      ->count();
    	return view('counties', compact('bomiAll','bomiFemale','bomiMale','bongAll','bongFemale','bongMale','gbarpoluAll','gbarpoluFemale','gbarpoluMale','bassaAll','bassaFemale','bassaMale','capeAll','capeFemale','capeMale','gedehAll','gedehFemale','gedehMale','kruAll','kruFemale','kruMale','lofaAll','lofaFemale','lofaMale','margibiAll','margibiFemale','margibiMale','marylandAll','marylandFemale','marylandMale','montAll','montFemale','montMale','nimbaAll','nimbaFemale','nimbaMale','cessAll','cessFemale','cessMale','geeAll','geeFemale','geeMale','sinoeAll','sinoeFemale','sinoeMale'));
    }

}
