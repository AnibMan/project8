<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studyfield extends Model
{
    protected $fillable=[
        'faculty','level','degree'
    ];

    public function subject(){
        return $this->hasMany("App\Subject","sf_id");
    }
}
