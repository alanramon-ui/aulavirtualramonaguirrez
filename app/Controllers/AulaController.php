public function index()
{
    // Por ahora, creamos aulas de ejemplo (después vendrán de la BD)
    $aulas = [
        ['id' => 1, 'nombre' => 'Aula 101', 'imagen' => 'https://via.placeholder.com/300x200/81C784/FFFFFF?text=Aula+101'],
        ['id' => 2, 'nombre' => 'Aula 205', 'imagen' => 'https://via.placeholder.com/300x200/81C784/FFFFFF?text=Aula+205'],
        ['id' => 3, 'nombre' => 'Laboratorio', 'imagen' => 'https://via.placeholder.com/300x200/81C784/FFFFFF?text=Laboratorio'],
    ];
    return view('aulas.index', compact('aulas'));
}

public function show($id)
{
    // Aquí iría: $aula = Aula::findOrFail($id);
    $aula = [
        'id' => $id,
        'nombre' => 'Aula ' . $id,
        'capacidad' => 30,
        'cantidad_focos' => 12,
        'cantidad_cortinas' => 4,
        'cantidad_sillas' => 30,
        'cantidad_mesas' => 15,
        'tiene_aire_acondicionado' => true,
    ];
    return view('aulas.show', compact('aula'));
}