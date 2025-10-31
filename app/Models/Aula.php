<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $fillable = [
        'nombre',
        'capacidad',
        'cantidad_focos',
        'cantidad_cortinas',
        'cantidad_sillas',
        'cantidad_mesas',
        'tiene_aire_acondicionado',
    ];
}