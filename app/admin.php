<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $fillable = [
        'u_id'
    ];

    public $timestamps = false;

    public $primaryKey = 'a_id';

}
