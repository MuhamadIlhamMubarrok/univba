<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $table = 'daftar';
    protected $primaryKey = 'daftar_id';
    protected $fillable = ['kelas', 'nama_leng', 'kampus', 'al_ktp', 'al_dom', 'j_kel', 'tmpt_lahir', 'no_ktp', 'jurusan', 'no_hp', 'no_wa', 'email', 'agama', 'ibu', 'ayah', 'jaket', 'lulusan', 'biaya', 'info', 'kerja', 'jabatan', 'al_kerja', 'no_kantor'];
}
