<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Sistema;
use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function index()
    {
        $sistemas = Sistema::with('aula')->get();
        return view('sistemas.index', compact('sistemas'));
    }

    public function create()
    {
        $aulas = Aula::all();
        return view('sistemas.create', compact('aulas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'aula_id' => 'required|exists:aulas,id',
            'temperatura' => 'nullable|numeric|min:-20|max:50',
            'iluminacion' => 'nullable|numeric|min:0|max:100',
            'calidad_del_aire' => 'nullable|string|max:50',
            'posicion_ventanas' => 'nullable|string|max:50',
            'altura' => 'nullable|numeric|min:0|max:10',
        ]);

        Sistema::create($request->all());
        return redirect()->route('sistemas.index')->with('success', 'Sistema creado correctamente.');
    }

    public function show(Sistema $sistema)
    {
        return view('sistemas.show', compact('sistema'));
    }

    public function edit(Sistema $sistema)
    {
        $aulas = Aula::all();
        return view('sistemas.edit', compact('sistema', 'aulas'));
    }

    public function update(Request $request, Sistema $sistema)
    {
        $request->validate([
            'aula_id' => 'required|exists:aulas,id',
            'temperatura' => 'nullable|numeric|min:-20|max:50',
            'iluminacion' => 'nullable|numeric|min:0|max:100',
            'calidad_del_aire' => 'nullable|string|max:50',
            'posicion_ventanas' => 'nullable|string|max:50',
            'altura' => 'nullable|numeric|min:0|max:10',
        ]);

        $sistema->update($request->all());
        return redirect()->route('sistemas.index')->with('success', 'Sistema actualizado.');
    }

    public function destroy(Sistema $sistema)
    {
        $sistema->delete();
        return redirect()->route('sistemas.index')->with('success', 'Sistema eliminado.');
    }
}