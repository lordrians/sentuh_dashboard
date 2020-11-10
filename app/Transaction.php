<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = ['id_stuff','id_category','id_mahasiswa','total_stuff'];

    public function stuff(){
        return $this -> belongsTo(Stuff::class,'id_stuff');
    }
    public function mahasiswa(){
        return $this -> belongsTo(Mahasiswa::class,'id_mahasiswa');
    }
    public function category(){
        return $this -> belongsTo(Category::class,'id_category');
    }
}
