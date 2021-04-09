<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table ='newquestion';
    protected $fillable=[
        'id','task'
    ];
    protected $hidden=[
        'created_at','updated_at'
    ];
}
