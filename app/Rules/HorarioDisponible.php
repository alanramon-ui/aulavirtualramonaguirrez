<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Reserva;

class HorarioDisponible implements Rule
{
    protected $aulaId;
    protected $fecha;
    protected $horaInicio;
    protected $horaFin;

    public function __construct($aulaId, $fecha, $horaInicio, $horaFin)
    {
        $this->aulaId = $aulaId;
        $this->fecha = $fecha;
        $this->horaInicio = $horaInicio;
        $this->horaFin = $horaFin;
    }

    public function passes($attribute, $value)
    {
        return !Reserva::where('aula_id', $this->aulaId)
            ->where('fecha', $this->fecha)
            ->where(function ($query) {
                $query->whereBetween('hora_inicio', [$this->horaInicio, $this->horaFin])
                      ->orWhereBetween('hora_fin', [$this->horaInicio, $this->horaFin])
                      ->orWhere(function ($q) {
                          $q->where('hora_inicio', '<=', $this->horaInicio)
                            ->where('hora_fin', '>=', $this->horaFin);
                      });
            })->exists();
    }

    public function message()
    {
        return 'El horario seleccionado ya está reservado para esta aula.';
    }
}