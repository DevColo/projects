<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Members;
use Datatables;

class EditMembersController extends Controller
{
    //
    function index(){
    	return view('editMembers');
    }
    
    function getdata()
    {
     $students = Members::select('member_id', 'fname', 'lname', 'gender', 'birthDate', 'county','district', 'cell', 'email');
     return Datatables::of($students)
            ->addColumn('action', function($student){
                return '<a href="#" class="btn btn-xs btn-primary edit" id="'.$student->id.'"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->make(true);
    }

     function fetchdata(Request $request)
    {
        $id = $request->input('id');
        $student = Members::find($id);
        $output = array(
        	'member_id'    =>  $student->member_id,
            'fname'    =>  $student->fname,
            'lname'     =>  $student->lname,
            'gender'     =>  $student->gender,
            'birthDate'     =>  $student->birthDate,
            'county'     =>  $student->county,
            'district'     =>  $student->district,
            'cell'     =>  $student->cell,
            'email'     =>  $student->email
        );
        echo json_encode($output);
    }

     function postdata(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'fname' => 'required',
            'lname'  => 'required',
        ]);
        
        $error_array = array();
        $success_output = '';
        if ($validation->fails())
        {
            foreach ($validation->messages()->getMessages() as $field_name => $messages)
            {
                $error_array[] = $messages; 
            }
        }
        else
        {
            if($request->get('button_action') == 'insert')
            {
                $student = new Members([
                    'fname'    =>  $request->get('fname'),
                    'lname'     =>  $request->get('lname'),
                     'gender'     => $request->get('gender'),
            'birthDate'     =>  $request->get('birthDate'),
            'county'     =>     $request->get('county'),
            'district'     =>   $request->get('district'),
            'cell'     =>       $request->get('cell'),
            'email'     =>      $request->get('email'),
                ]);
                $student->save();
                $success_output = '<div class="alert alert-success">Data Inserted</div>';
            }

            if($request->get('button_action') == 'update')
            {
                $student = Members::find($request->get());
                $student->member_id = $request->get('member_id');
                $student->fname = $request->get('fname');
                $student->lname = $request->get('lname');
                $student->gender = $request->get('gender');
                $student->birthDate = $request->get('birthDate');
                $student->county = $request->get('county');
                $student->district = $request->get('district');
                $student->cell = $request->get('cell');
                $student->email = $request->get('email');
                $student->save();
                $success_output = '<div class="alert alert-success">Data Updated</div>';
            }
            
        }
        
        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);
    }

}
