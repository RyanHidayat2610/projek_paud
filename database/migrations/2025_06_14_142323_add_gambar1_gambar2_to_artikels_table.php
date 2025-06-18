<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('artikels', function (Blueprint $table) {
        $table->string('gambar1')->nullable();
        $table->string('gambar2')->nullable();
    });
}

public function down()
{
    Schema::table('artikels', function (Blueprint $table) {
        $table->dropColumn(['gambar1', 'gambar2']);
    });
}

};
