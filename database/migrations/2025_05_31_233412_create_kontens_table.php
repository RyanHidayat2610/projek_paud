<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('kontens', function (Blueprint $table) {
        $table->id();
        $table->string('jenis_konten');
        $table->text('isi_teks')->nullable();
        $table->string('gambar_path')->nullable();
        $table->timestamps();
    });
}

};
