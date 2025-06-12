<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
        {
            Schema::table('formulir_anak', function (Blueprint $table) {
                $table->enum('status', ['diproses', 'diterima', 'ditolak'])->default('diproses');
            });
        }

    public function down()
        {
            Schema::table('formulir_anak', function (Blueprint $table) {
                $table->dropColumn('status');
            });
        }

};
