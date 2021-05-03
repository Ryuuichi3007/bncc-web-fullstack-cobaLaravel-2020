<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';

    protected $fillable=[
        'id','isi','pertanyaan_id'
    ];
    protected $hidden=[
        'created_at','updated_at'
    ];

    public function pertanyaan()
    {
        return $this->hasMany(Pertanyaan::class);
    }
}
