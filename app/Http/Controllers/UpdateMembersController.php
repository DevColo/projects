<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Response;
use DB;
use Config;
use Datatables;
use App\Members;

class UpdateMembersController extends Controller
{
    //
    public function index()
    {
        return view('updateMembers');
    }
    public function membersList()
    {
        $members = DB::table('members')->select('*');
        return datatables()->of($members)
        ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="#editModal" class=" btn-primary btn-sm"><i class="fa fa-edit"></i></a>';

                           $btn = $btn.'<a href="javascript:void(0)" class=" btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>';
         
                            return $btn;
                    })
                    ->rawColumns(['action'])
            ->make(true);
    }
}
