<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    //
     protected $table = "images";
     protected $primaryKey = 'image_id';
     protected $fillable = ['kategori', 'file', 'path', 'active', 'created_at'];

    
}

 