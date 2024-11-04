<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar', function (Blueprint $table) {
           $table->id('daftar_id'); 
            $table->string('kelas');
            $table->string('nama_leng');
            $table->string('kampus');
            $table->string('al_ktp');
            $table->string('al_dom');
            $table->string('j_kel');
            $table->string('tmpt_lahir');
            $table->string('no_ktp');
            $table->string('jurusan');
            $table->string('no_hp');
            $table->string('no_wa');
            $table->string('email');
            $table->string('agama');
            $table->string('ibu');
            $table->string('ayah');
            $table->string('jaket');
            $table->string('lulusan');
            $table->string('biaya');
            $table->string('info');
            $table->string('kerja');
            $table->string('jabatan');
            $table->string('al_kerja');
            $table->string('no_kantor');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar');
    }
}
