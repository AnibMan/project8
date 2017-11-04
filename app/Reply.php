<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = [
        'u_id', 'rep', 'q_id','attachment'
    ];

    public $timestamps = false;

    public $primaryKey = 'r_id';
    protected $table = 'replys';
}
