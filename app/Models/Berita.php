<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id_berita';
    protected $fillable = ['judul', 'ringkasan', 'content', 'tanggal_berita', 'file_foto'];
    public $timestamps = false;
}
