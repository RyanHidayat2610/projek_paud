
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserFieldsToFormulirAnakTable extends Migration
{
    public function up()
    {
        Schema::table('formulir_anak', function (Blueprint $table) {
            if (!Schema::hasColumn('formulir_anak', 'user_id')) {
                $table->unsignedBigInteger('user_id')->after('id')->nullable();
            }

            if (!Schema::hasColumn('formulir_anak', 'username')) {
                $table->string('username')->after('user_id')->nullable();
            }

            if (!Schema::hasColumn('formulir_anak', 'email')) {
                $table->string('email')->after('username')->nullable();
            }

            if (!Schema::hasColumn('formulir_anak', 'no_hp')) {
                $table->string('no_hp')->after('email')->nullable();
            }

            if (!Schema::hasColumn('formulir_anak', 'status')) {
                $table->enum('status', ['Proses', 'Diterima', 'Ditolak'])->default('Proses')->after('foto_kk');
            }
        });
    }

    public function down()
    {
        Schema::table('formulir_anak', function (Blueprint $table) {
            if (Schema::hasColumn('formulir_anak', 'user_id')) {
                $table->dropColumn('user_id');
            }
            if (Schema::hasColumn('formulir_anak', 'username')) {
                $table->dropColumn('username');
            }
            if (Schema::hasColumn('formulir_anak', 'email')) {
                $table->dropColumn('email');
            }
            if (Schema::hasColumn('formulir_anak', 'no_hp')) {
                $table->dropColumn('no_hp');
            }
            if (Schema::hasColumn('formulir_anak', 'status')) {
                $table->dropColumn('status');
            }
        });
    }
}
