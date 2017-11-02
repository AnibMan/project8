<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studyfield_user extends Model
{
    protected $table = 'studyfield_user';

    public $timestamps = false;

    protected $fillable=[
        'u_id','sf_id'
    ];
}
