<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index()
    {
        // Obtener solo los empleados cuyo 'status' sea 'active'
        $employes = Employe::where('status', 'active')->get();
        
        return view('employes.index', compact('employes'));
    }
    

    // Mostrar el formulario para crear un nuevo empleado
    public function create()
    {
        return view('employes.create');
    }

    // Almacenar un nuevo empleado
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:employes,email',
            'phone' => 'nullable|string|max:20',
            'position' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'hire_date' => 'required|date',
        ]);

        $employe = Employe::create($request->all());

        return redirect()->route('employes.index')->with('success', 'Empleado creado exitosamente.');
    }

    // Mostrar los detalles de un empleado
    public function show($id)
    {
        $employe = Employe::findOrFail($id);
        return view('employes.show', compact('employe'));
    }

    public function edit($id)
    {
        $employe = Employe::findOrFail($id);
        return view('employes.edit', compact('employe'));
    }

    // Actualizar los datos de un empleado
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'sometimes|string|max:255',
            'last_name' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|unique:employes,email,' . $id,
            'phone' => 'nullable|string|max:20',
            'position' => 'sometimes|string|max:255',
            'salary' => 'sometimes|numeric',
            'hire_date' => 'sometimes|date',
        ]);

        $employe = Employe::findOrFail($id);
        $employe->update($request->all());

        return redirect()->route('employes.index')->with('success', 'Empleado actualizado exitosamente.');
    }

    // Eliminar un empleado
    public function destroy($id)
    {
        $employe = Employe::findOrFail($id);
        $employe->update(['status' => 'inactive']);
    
        return redirect()->route('employes.index')->with('success', 'Empleado eliminado exitosamente.');
    }
    
}
