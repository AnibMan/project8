<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=[
        'sf_id','u_id','sub_id','que'
    ];

    public $timestamps = false;
}
