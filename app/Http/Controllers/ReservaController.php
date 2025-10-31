<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;
use App\Models\Reserva;
use Illuminate\Support\Facades\Auth;

class ReservaController extends Controller
{
    public function create(Aula $aula)
    {
        return view('reservas.create', compact('aula'));
    }

    public function store(Request $request, Aula $aula)
    {
        $request->validate([
            'fecha' => 'required|date|after_or_equal:today',
            'hora_inicio' => 'required',
            'hora_fin' => 'required|after:hora_inicio',
            'motivo' => 'required|string|max:255',
        ]);

        // ⚠️ Por ahora, asumimos que el usuario está logueado.
        // Más adelante protegeremos esta acción.
        $user = Auth::user(); // Esto fallará si no hay login → lo arreglamos en el paso 4.

        Reserva::create([
            'user_id' => $user->id,
            'aula_id' => $aula->id,
            'fecha' => $request->fecha,
            'hora_inicio' => $request->hora_inicio,
            'hora_fin' => $request->hora_fin,
            'motivo' => $request->motivo,
        ]);

        return redirect()->route('home')->with('success', '¡Aula reservada con éxito!');
    }
}