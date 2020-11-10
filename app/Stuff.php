<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    //
    protected $fillable = ['name','id_category'];

    public function category(){
        return $this -> belongsTo(Category::class,'id_category');
      }
    public function transaction(){
        return $this -> hasMany(Transaction::class);
    }
}
