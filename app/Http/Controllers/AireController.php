<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula; // Asumimos que el estado del aire está en el modelo Aula

class AireController extends Controller
{
    public function index()
    {
        $aulas = Aula::all();
        return view('aires.index', compact('aulas'));
    }
}