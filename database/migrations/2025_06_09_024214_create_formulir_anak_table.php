<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulirAnakTable extends Migration
{
    public function up()
    {
        Schema::create('formulir_anak', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir');
            $table->enum('gender', ['Laki-laki', 'Perempuan']);
            $table->string('agama');
            $table->string('hobi')->nullable();
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('jarak_rumah');
            $table->string('foto_akte')->nullable();
            $table->string('foto_kk')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('formulir_anak');
    }
};
