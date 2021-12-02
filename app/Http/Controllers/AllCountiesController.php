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

class AllCountiesController extends Controller
{
    //
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
        return view('allCounties');}
    // 	$bongTotal = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Bong')
    //         ->count();
    //     $bongFemale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Bong')
    //         ->where('members.gender', '=', 'female')
    //         ->count();
    //         $bongMale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Bong')
    //         ->where('members.gender', '=', 'male')
    //         ->count();
        
    //     $bomiTotal = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Bomi')
    //         ->count();
    //     $bomiFemale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Bomi')
    //         ->where('members.gender', '=', 'female')
    //         ->count();
    //         $bomiMale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Bomi')
    //         ->where('members.gender', '=', 'male')
    //         ->count();

    //     //  $gbarpoluTotal = DB::table('members')
    //     //     ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //     //     ->join('users', 'users.id','=','members.admin_id' )
    //     //     ->where('members.county', '=', 'Gbarpolu')
    //     //     ->count();
    //     // $gbarpoluFemale = DB::table('members')
    //     //     ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //     //     ->join('users', 'users.id','=','members.admin_id' )
    //     //     ->where('members.county', '=', 'Gbarpolu')
    //     //     ->where('members.gender', '=', 'female')
    //     //     ->count();
    //     //     $gbarpoluMale = DB::table('members')
    //     //     ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //     //     ->join('users', 'users.id','=','members.admin_id' )
    //     //     ->where('members.county', '=', 'Gbarpolu')
    //     //     ->where('members.gender', '=', 'male')
    //     //     ->count();

    //     $BassaTotal = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Grand-Bassa')
    //         ->count();
    //     $BassaFemale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Grand-Bassa')
    //         ->where('members.gender', '=', 'female')
    //         ->count();
    //         $BassaMale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Grand-Bassa')
    //         ->where('members.gender', '=', 'male')
    //         ->count();

    //     $CapeMountTotal = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Grand-Cape-Mount')
    //         ->count();
    //     $CapeMountFemale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Grand-Cape-Mount')
    //         ->where('members.gender', '=', 'female')
    //         ->count();
    //         $CapeMountMale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Grand-Cape-Mount')
    //         ->where('members.gender', '=', 'male')
    //         ->count();

    //     $gedehTotal = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Grand-Gedeh')
    //         ->count();
    //     $gedehFemale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Grand-Gedeh')
    //         ->where('members.gender', '=', 'female')
    //         ->count();
    //         $gedehMale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Grand-Gedeh')
    //         ->where('members.gender', '=', 'male')
    //         ->count();

    //     $kruTotal = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Grand-Kru')
    //         ->count();
    //     $kruFemale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Grand-Kru')
    //         ->where('members.gender', '=', 'female')
    //         ->count();
    //         $kruMale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Grand-Kru')
    //         ->where('members.gender', '=', 'male')
    //         ->count();

    //     $lofaTotal = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Lofa')
    //         ->count();
    //     $lofaFemale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Lofa')
    //         ->where('members.gender', '=', 'female')
    //         ->count();
    //         $lofaMale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Lofa')
    //         ->where('members.gender', '=', 'male')
    //         ->count();

    //     $margibiTotal = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Margibi')
    //         ->count();
    //     $margibiFemale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Margibi')
    //         ->where('members.gender', '=', 'female')
    //         ->count();
    //         $margibiMale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Margibi')
    //         ->where('members.gender', '=', 'male')
    //         ->count();

    //     $marylandTotal = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Maryland')
    //         ->count();
    //     $marylandFemale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Maryland')
    //         ->where('members.gender', '=', 'female')
    //         ->count();
    //         $marylandMale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Maryland')
    //         ->where('members.gender', '=', 'male')
    //         ->count();

    //     $montserradoTotal = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Montserrado')
    //         ->count();
    //     $montserradoFemale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Montserrado')
    //         ->where('members.gender', '=', 'female')
    //         ->count();
    //         $montserradoMale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Montserrado')
    //         ->where('members.gender', '=', 'male')
    //         ->count();

    //     $nimbaTotal = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Nimba')
    //         ->count();
    //     $nimbaFemale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Nimba')
    //         ->where('members.gender', '=', 'female')
    //         ->count();
    //         $nimbaMale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Nimba')
    //         ->where('members.gender', '=', 'male')
    //         ->count();

    //     $riverCessTotal = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'River-Cess')
    //         ->count();
    //     $riverCessFemale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'River-Cess')
    //         ->where('members.gender', '=', 'female')
    //         ->count();
    //         $riverCessMale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'River-Cess')
    //         ->where('members.gender', '=', 'male')
    //         ->count();

    //     $riverGeeTotal = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'River-Gee')
    //         ->count();
    //     $riverGeeFemale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'River-Gee')
    //         ->where('members.gender', '=', 'female')
    //         ->count();
    //         $riverGeeMale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'River-Gee')
    //         ->where('members.gender', '=', 'male')
    //         ->count();

    //     $sinoeTotal = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Sinoe')
    //         ->count();
    //     $sinoeFemale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Sinoe')
    //         ->where('members.gender', '=', 'female')
    //         ->count();
    //         $sinoeMale = DB::table('members')
    //         ->join('admin_members','admin_members.member_id', '=', 'members.id')
    //         ->join('users', 'users.id','=','members.admin_id' )
    //         ->where('members.county', '=', 'Sinoe')
    //         ->where('members.gender', '=', 'male')
    //         ->count();


    // 	return view('allCounties', compact('bongTotal','bongFemale','bongMale','bomiTotal','bomiFemale','bomiMale','BassaTotal','BassaFemale','BassaMale','CapeMountTotal','CapeMountFemale','CapeMountMale','gedehTotal','gedehFemale','gedehMale','kruTotal','kruFemale','kruMale','lofaTotal','lofaFemale','lofaMale','margibiTotal','margibiFemale','margibiMale','marylandTotal','marylandFemale','marylandMale','montserradoTotal','montserradoFemale','montserradoMale','nimbaTotal','nimbaFemale','nimbaFemale','nimbaMale','riverCessTotal','riverCessFemale','riverCessMale','riverGeeTotal','riverGeeFemale','riverGeeMale','sinoeTotal','sinoeFemale','sinoeMale'));
    // }
}
