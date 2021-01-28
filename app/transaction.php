<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $fillable = [
        'users_id', 'package_id', 'details_id','date', 'dp','status','pict',
        'description', 'total'
    ];
}
