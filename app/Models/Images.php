<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    //
     protected $table = "images";
     protected $primaryKey = 'image_id';

     public $timestamps = false;
     protected $fillable = ['kategori', 'file', 'active', 'created_at'];

    
}

 