<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminMembers extends Model
{
    //
    protected $table = 'admin_members';
    protected $fillable = [
    	'admin_id', 'member_id',
    ];
}
