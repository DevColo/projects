<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    //
    protected $table = 'members';
    protected $fillable = [
    	'member_id','fname','lname', 'gender','voterID', 'birthDate','age', 'county', 'district', 'cell', 'email', 'photo', 'admin_id', 
    ];
}
