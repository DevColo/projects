<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members;
use DataTables;
use DB;
use Auth;
class ViewMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        
             return view('viewMembers');
       
    }
    public function show(){
        if ($request->ajax()) {
            $data = Members::latest()->get();
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sms">Edit</button> ';
                $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete() btn btn-danger btn-sms">Delete</button> ';
                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('viewMembers');
             if (request()->ajax()) {
                return datatables()->of(Members::latest()->get())
                        ->column('action', function($data){
                            $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sms">Edit</button> ';
                           $button .= '&nbsp;&nbsp;';
                          $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete() btn btn-danger btn-sms">Delete</button> ';
                 return $button;
                 })
                 ->rawColumns(['action'])
                 ->make(true);
             }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
