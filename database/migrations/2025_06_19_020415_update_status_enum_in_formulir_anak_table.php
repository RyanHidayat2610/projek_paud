<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        DB::statement("ALTER TABLE formulir_anak MODIFY status ENUM('diproses', 'diterima', 'ditolak') DEFAULT 'diproses'");
    }

    public function down()
    {
        // Jika ingin rollback ke enum sebelumnya
        DB::statement("ALTER TABLE formulir_anak MODIFY status ENUM('Proses', 'diterima', 'ditolak') DEFAULT 'Proses'");
    }
};

