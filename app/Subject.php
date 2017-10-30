<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable=[
        'sub_name','sf_id','semester'
    ];
    public function studyfield(){
        return $this->belongsTo("App\studyfield");
    }
}
