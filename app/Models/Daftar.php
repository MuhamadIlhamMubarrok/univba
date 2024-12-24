<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    // Nama tabel di database
    protected $table = 'daftar';

    // Primary key tabel
    protected $primaryKey = 'daftar_id';

    // Jika primary key bukan auto-increment
    public $incrementing = false;

    // Tipe primary key (misal string)
    protected $keyType = 'string';

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'daftar_id', 'kelas', 'nama_leng', 'kampus', 
        'al_ktp', 'al_dom', 'j_kel', 'tmpt_lahir', 
        'no_ktp', 'jurusan', 'no_hp', 'no_wa', 
        'email', 'agama', 'ibu', 'ayah', 'jaket', 
        'lulusan', 'biaya', 'info', 'kerja', 'jabatan', 
        'al_kerja', 'no_kantor'
    ];

    // Nonaktifkan timestamp
    public $timestamps = false;
}
