<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
     protected $table = "page";
     protected $primaryKey = 'page_id';
     protected $fillable = ['judul', 'slug', 'short', 'isi', 'image', 'link', 'created_at'];

    
}

 