<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); 
            $table->foreignId('depart_id')->constrained('departments'); 
            $table->string('address');
            $table->string('place_of_birth');
            $table->date('dob');
            $table->string('religion');
            $table->string('sex');
            $table->string('phone');
            $table->decimal('salary', 10, 2);
            $table->string('photo')->nullable(); // Kolom untuk foto
            $table->enum('employment_status', ['active', 'inactive', 'on_leave'])->default('active'); // Kolom untuk status kerja
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
