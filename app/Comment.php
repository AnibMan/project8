<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[
        'u_id','q_id','com'
    ];

    public $timestamps = false;
}
