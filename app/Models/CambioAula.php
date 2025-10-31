<?php
public function reportarCambio(Request $request, Aula $aula)
{
    $request->validate([
        'tipo_cambio' => 'required|in:foco,cortina,silla,mesa,aire',
        'cantidad' => 'required|integer|min:1',
        'descripcion' => 'nullable|string',
    ]);

    CambioAula::create([
        'aula_id' => $aula->id,
        'user_id' => Auth::id(), // luego lo protegemos
        'tipo_cambio' => $request->tipo_cambio,
        'cantidad' => $request->cantidad,
        'descripcion' => $request->descripcion,
    ]);

    return back()->with('success', '¡Cambio reportado con éxito!');
}