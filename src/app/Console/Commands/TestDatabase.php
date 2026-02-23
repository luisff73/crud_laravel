<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TestDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:test'; // Este es el nombre que usarás para ejecutar el comando

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prueba la conexión a la base de datos MySQL y realiza una consulta simple.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            DB::connection()->getPdo();
            $this->info("¡Conexión a MySQL exitosa!");

            $result = DB::select('SELECT 1 + 1 AS result');
            $this->info("Consulta simple OK: " . $result[0]->result);
            return Command::SUCCESS;
        } catch (\Exception $e) {
            $this->error("¡Error al conectar o consultar la base de datos MySQL!");
            $this->error("Mensaje de error: " . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
