<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $fillable = ['name'];

    public function stuff(){
        return $this -> hasMany(Stuff::class);
      }
    public function transaction(){
      return $this -> hasMany(Transaction::class);
    }
}
