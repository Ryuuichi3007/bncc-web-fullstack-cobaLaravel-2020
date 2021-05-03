<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JawabanBenar extends Model
{
    protected $table = 'jawaban_benar';

    protected $fillable=[
        'id','isi','pertanyaan_id'
    ];
    protected $hidden=[
        'created_at','updated_at'
    ];

    public function pertanyaan()
    {
        return $this->hasOne(Pertanyaan::class);
    }
}
