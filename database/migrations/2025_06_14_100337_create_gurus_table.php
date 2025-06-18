<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{
   public function up()
{
    Schema::create('gurus', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('jenis_guru');
        $table->text('riwayat_sekolah');
        $table->text('hobi');
        $table->text('motivasi');
        $table->string('foto_profile')->nullable();
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('gurus');
    }
}

