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
    Schema::table('formulir_anak', function (Blueprint $table) {
        $table->unsignedBigInteger('user_id')->nullable();
        $table->string('username')->nullable();
        $table->string('email')->nullable();
        $table->string('no_hp')->nullable();

        $table->foreign('user_id')->references('id')->on('login_user')->onDelete('set null');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('formulir_anak', function (Blueprint $table) {
            //
        });
    }
};
