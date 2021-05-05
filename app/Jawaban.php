<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban';

    protected $fillable=[
        'id','isi','pertanyaan_id'
    ];
    protected $hidden=[
        'created_at','updated_at'
    ];
    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class);
    }
}
