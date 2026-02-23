<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class trayectos extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'inicio',
        'destino',
        'duracion',
        'precio',
        'descripcion',
        'horario_salida',
        'horario_llegada',
        'id_barco',
    ];

    /** Relación con el modelo barcos **/
    public function barcos(): BelongsTo
    {
        return $this->belongsTo(barcos::class, 'id_barco', 'id');
    }
}
