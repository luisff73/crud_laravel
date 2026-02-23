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
            $table->integer('emp_id')->primary(); // Clave primaria, no auto-incrementable
            $table->string('emp_firstname', 100); // NOT NULL por defecto
            $table->string('emp_lastname', 100);  // NOT NULL por defecto
            $table->date('emp_birth_date');       // NOT NULL por defecto
            $table->date('emp_hire_date');        // NOT NULL por defecto
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
