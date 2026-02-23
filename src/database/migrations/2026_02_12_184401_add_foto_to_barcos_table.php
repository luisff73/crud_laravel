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
        Schema::table('barcos', function (Blueprint $table) {
            // Añade la columna 'foto' como string y permite que sea nula.
            // Si quieres que sea obligatoria, deberías considerar un valor por defecto
            // o asegurarte de que no hay registros existentes o que los manejarás.
            $table->string('foto', 255)->nullable()->after('velocidad_maxima');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('barcos', function (Blueprint $table) {
            $table->dropColumn('foto');
        });
    }
};
