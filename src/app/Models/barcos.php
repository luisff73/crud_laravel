<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barcos extends Model
{
    protected $table = 'barcos';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'nombre',
        'tipo_combustible',
        'capacidad_pasajeros',
        'velocidad_maxima',
        'foto',
    ];
}
