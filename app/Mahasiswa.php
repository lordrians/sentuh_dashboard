<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //

    protected $table = 'mahasiswa';
    protected $fillable = [
        'nama',
        'nim',
        'alamat',
        'jk',
        'jurusan',
        'prodi',
        'kelas',
        'angkatan'
    ];

    // public function getNamaAttribute($nama){
    //     return ucwords($nama);
    // }

    // public function setNamaAttribute($nama){
    //     return strtolower($nama);
    // }
    public function transaction(){
        return $this -> hasMany(Transaction::class);
    }
}