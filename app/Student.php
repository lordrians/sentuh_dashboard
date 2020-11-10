<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['nama', 'nisn', 'jk','asal_sekolah','alamat'];
}
