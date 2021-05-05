<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';

    protected $fillable=[
        'id','isi','user_id','jawabanBenar_id'
    ];
    protected $hidden=[
        'created_at','updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function jawaban()
    {
        return $this->hasMany(Jawaban::class, 'pertanyaan_id', 'id');
    }
    public function jawabanBenar()
    {
        return $this->hasMany(Jawaban::class, 'pertanyaan_id', 'id');
    }
    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'hashtag', 'pertanyaan_id', 'tag_id');
    }
}
