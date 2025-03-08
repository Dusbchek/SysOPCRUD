<?php

namespace App\Http\Controllers;

use App\Models\Rutina;
use Illuminate\Http\Request;

class RutinaController extends Controller
{
    public function index()
    {
        $rutinas = Rutina::all(); 
        return view('rutinas.index', compact('rutinas'));
    }

    public function create()
    {
        return view('rutinas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'tipo' => 'required|string',
            'duracion' => 'required|integer',
            'repeticiones' => 'required|integer',
        ]);

        Rutina::create($request->all());

        return redirect()->route('rutinas.index')->with('success', 'Rutina creada exitosamente.');
    }

    public function show(Rutina $rutina)
    {
        return view('rutinas.show', compact('rutina'));
    }

    public function edit(Rutina $rutina)
    {
        return view('rutinas.edit', compact('rutina'));
    }

    public function update(Request $request, Rutina $rutina)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'tipo' => 'required|string',
            'duracion' => 'required|integer',
            'repeticiones' => 'required|integer',
        ]);

        $rutina->update($request->all());

        return redirect()->route('rutinas.index')->with('success', 'Rutina actualizada exitosamente.');
    }

    public function destroy(Rutina $rutina)
    {
        $rutina->delete();

        return redirect()->route('rutinas.index')->with('success', 'Rutina eliminada exitosamente.');
    }
}
