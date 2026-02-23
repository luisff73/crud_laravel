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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('inicio', 100);
            $table->string('destino', 100);
            $table->string('duracion', 100);
            $table->float('precio', 10, 2);
            $table->string('descripcion', 100);
            $table->string('horario_salida', 100);
            $table->string('horario_llegada', 100);
            $table->foreignId('id_barco')->constrained('barcos'); // Clave foránea de barcos
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
