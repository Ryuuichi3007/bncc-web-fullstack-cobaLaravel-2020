<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';

    protected $fillable=[
        'id','isi','user_id','jawaban_id','jawaban_benar_id','tag_id'
    ];
    protected $hidden=[
        'created_at','updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function jawabanBenar()
    {
        return $this->hasOne(Jawaban::class);
    }

    public function jawaban()
    {
        return $this->hasMany(Jawaban::class);
    }

    public function tag()
    {
        return $this->hasMany(Tag::class);
    }
}
