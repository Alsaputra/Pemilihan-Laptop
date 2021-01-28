<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    protected $fillable = [
        'name_pack', 'price', 'qty_photos', 'qty_edit', 'duration', 
        'working_hours'
    ];
}
