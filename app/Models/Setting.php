<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
     protected $table = "setting";
     protected $primaryKey = 'id_setting';
     protected $fillable = ['jenis_set', 'nama_set', 'nilai_set', 'active', 'modified'];

    public $timestamps = false;
}

 