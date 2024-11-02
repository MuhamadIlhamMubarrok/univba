<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    //
     protected $table = "beranda";
     protected $primaryKey = 'beranda_id';
     protected $fillable = ['page_id', 'urut', 'tipe', 'active'];

     public function page()
     {
         return $this->belongsTo(Page::class, 'page_id');
     }
}

 