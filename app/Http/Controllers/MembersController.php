<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminMembers;
use App\Members;
use DataTables;
use Redirect;
use Validator;
use Auth;
use DB;

class MembersController extends Controller
{
    //
    public function __construct(){
    	$this->middleware('auth');
    }

    public function membersForm(){
    	return view('addMembers');
    }

    public function store(Request $request){
    	$input = $request->all();

          

        $validateInput = Validator::make($input,[
        	'fname'  => 'required|string|max:255',
        	'lname'  => 'required|string|max:255',
        	'gender'  => 'required|string',
          'voterID'  => 'required|string|max:9|min:9|unique:members',
        	'birthDate'  => 'required|string',
        	'county'  => 'required|string',
        	'district'  => 'required|string',
        	'cell'      => 'required|string',
        ],[
        	'fname.required' => 'First name is required',
        	'lname.required' => 'Last name is required',
        	'gender.required' => 'Gender name is required',
          'voterID.unique' => 'Voter ID already exist',
          'voterID.max' => 'Voter ID must be 9 digits',
          'voterID.min' => 'Voter ID must be 9 digits',
        	'birthDate.required' => 'Date of birth is required',
        	'county.required' => 'County is required',
        	'district.required' => 'District is required',
        	'cell.required' => 'Phone number is required',
        ]);

        if ($validateInput->fails()) {
        	\Session::flash('msgErr',' Member was not register, try again' );

            return redirect()->back()->withErrors($validateInput->errors())->withInput();
        }
        
        else{
            // Making Member unique 
        	$uniqueMember = DB::table('members')
        	                ->join('admin_members', 'admin_members.member_id', '=', 'members.id')
        	                // ->join('users', 'users.id', '=', 'admin_members.admin_id')
        	                ->where('fname',$input['fname'])
        	                ->where('lname',$input['lname'])
        	                ->where('birthDate',$input['birthDate'])
        	                ->where('gender',$input['gender'])
                          ->where('voterID',$input['voterID'])
        	                ->where('county',$input['county'])
        	                ->where('district',$input['district'])
        	                ->where('cell',$input['cell'])
        	                ->count();
        	if ($uniqueMember>0) {
       \Session::flash('msgErr','This member has already been registered ');
       return redirect()->back()->withInput();
    } 

    // Validating each County Electoral District
        if ($input['county'] =='Bomi' && $input['district'] > 3)  {
            \Session::flash('msgErr','This district does not exist in Bomi County');
        return redirect()->back()->withInput();
       }

       if ($input['county'] =='Bong' && $input['district'] > 7)  {
           \Session::flash('msgErr','This district does not exist in Bong County');
       return redirect()->back()->withInput();
       }

        if ($input['county'] =='Gbarpolu' && $input['district'] > 3)  {
           \Session::flash('msgErr','This district does not exist in Gbarpolu County');
       return redirect()->back()->withInput();
       }

        if ($input['county'] =='Grand-Bassa' && $input['district'] > 5)  {
           \Session::flash('msgErr','This district does not exist in Grand-Bassa County');
       return redirect()->back()->withInput();
       }

        if ($input['county'] =='Grand-Cape-Mount' && $input['district'] > 3)  {
           \Session::flash('msgErr','This district does not exist in Grand-Cape-Mount County');
       return redirect()->back()->withInput();
       }

        if ($input['county'] =='Grand-Gedeh' && $input['district'] > 3)  {
           \Session::flash('msgErr','This district does not exist in Grand-Gedeh County');
       return redirect()->back()->withInput();
       }

        if ($input['county'] =='Grand-Kru' && $input['district'] > 2)  {
           \Session::flash('msgErr','This district does not exist in Grand-Kru County');
       return redirect()->back()->withInput();
       }

        if ($input['county'] =='Lofa' && $input['district'] > 5)  {
           \Session::flash('msgErr','This district does not exist in Lofa County');
       return redirect()->back()->withInput();
       }

        if ($input['county'] =='Margibi' && $input['district'] > 5)  {
           \Session::flash('msgErr','This district does not exist in Margibi County');
       return redirect()->back()->withInput();
       }

        if ($input['county'] =='Maryland' && $input['district'] > 3)  {
           \Session::flash('msgErr','This district does not exist in Maryland County');
       return redirect()->back()->withInput();
       }

        if ($input['county'] =='Montserrado' && $input['district'] > 17)  {
           \Session::flash('msgErr','This district does not exist in Montserrado County');
       return redirect()->back()->withInput();
       }

        if ($input['county'] =='Nimba' && $input['district'] > 9)  {
           \Session::flash('msgErr','This district does not exist in Nimba County');
       return redirect()->back()->withInput();
       }

        if ($input['county'] =='River-Cess' && $input['district'] > 2)  {
           \Session::flash('msgErr','This district does not exist in River-Cess County');
       return redirect()->back()->withInput();
       }

        if ($input['county'] =='River-Gee' && $input['district'] > 3)  {
           \Session::flash('msgErr','This district does not exist in River-Gee County');
       return redirect()->back()->withInput();
       }

        if ($input['county'] =='Sinoe' && $input['district'] > 3)  {
           \Session::flash('msgErr','This district does not exist in Sinoe County');
       return redirect()->back()->withInput();
       }
        
        // Getting member birth date from the form input
        $memberDOB = $input['birthDate'];
        // Getting today's date
        $todayDate = date('Y-m-d');
        // Converting member birth date to seconds
        $date1 = strtotime($memberDOB);
        // Converting  today's date to in seconds
        $date2 = strtotime($todayDate);
        // Finding the member's age in seconds
        $ageInSeconds = $date2-$date1;
        // Converting the seconds to member real age
         $age = $ageInSeconds/(60*60*24*365);
        // Converting member age to whole number
         $memberAge = intval($age);
         // dd($memberAge);
        


        	$input = $request->all();

        	if($input['member_id']=='NO ID'){
             $code = (DB::table('members')->count()) +1;
            }else{
                $membersId=$input['member_id'];
            }
             if($code<=9){
            
            $membersId="000".$code; 
              }
            if($code<=99 && $code>9){
            $membersId="00".$code; 
            }
            if($code>99 && $code<=999){
            $membersId="0".$code; 
            }
            if ($code>999999){
            $membersId=$code; 
            }
            $membersId=$membersId;
            

            $membersData = array(
            	'member_id' => $membersId,
            	'fname'     => $input['fname'],
              // 'Mname'     => $input['Mname'],
            	'lname'     => $input['lname'],
            	'gender'    => $input['gender'],
              'voterID'   => $input['voterID'],
            	'birthDate' => $input['birthDate'],
              'age'       => $memberAge,
            	'county'    => $input['county'],
            	'district'  => $input['district'],
            	'cell'      => $input['cell'],
            	'email'     => $input['email'],
            	'photo'     => $input['photo'],
            	'admin_id'  => Auth::user()->id,
            );
            $saveMembers = Members::create($membersData);

            $class_id=DB::table('members')
                     ->where('admin_id',Auth::user()->id)
                     ->where('fname',$input['fname'])
                     ->pluck('id');
         //class_id pointer
        $class_id=$class_id[0];
//dd($class_id);
            $admin_membersData = array(
            	'admin_id' => Auth::user()->id,
            	'member_id'=> $class_id
            );
            $saveAdminMembers = AdminMembers::create($admin_membersData);

       \Session::flash('msg','You have successfully registered member');
       return  Redirect::to('home/addMembers');
    }
        }

        // public function membersTable(){
        // 	 if (request()->ajax()) {
        // 		return datatables()->of(Members::latest()->get())
        // 	 	->column('action', function($data){
        // 	 		$button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sms">Edit</button> ';
        // 	 		$button .= '&nbsp;&nbsp;';
        // 	 		$button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete() btn btn-danger btn-sms">Delete</button> ';
        // 	 		return $button;
        // 	 	})
        // 	 	->rawColumns(['action'])
        // 	 	->make(true);
        // 	}
        // 	return view('viewMembers');
        // }
    
}
