<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmploymentStatusToEmployeesTable extends Migration
{
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->enum('employment_status', ['active', 'inactive'])->default('active'); // Menambahkan kolom 'employment_status'
        });
    }

    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn('employment_status'); // Menghapus kolom 'employment_status' jika migrasi dibatalkan
        });
    }
}
