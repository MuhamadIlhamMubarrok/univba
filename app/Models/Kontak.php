<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    //
     protected $table = "kontak";
     protected $primaryKey = 'kontak_id';
     protected $fillable = ['nama', 'no_telp', 'email', 'email', 'alamat', 'pesan', 'created_at'];

    
}

 