<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $employes = Employe::query()
            ->where('status', 'active') 
            ->where(function($query) use ($search) {
                $query->where('first_name', 'LIKE', "%{$search}%")
                      ->orWhere('last_name', 'LIKE', "%{$search}%")
                      ->orWhere('position', 'LIKE', "%{$search}%");
            })
            ->get();
        
        return view('employes.index', compact('employes'));
    }
    

    public function create()
    {
        return view('employes.create');
    }

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

    public function destroy($id)
    {
        $employe = Employe::findOrFail($id);
        $employe->update(['status' => 'inactive']);
    
        return redirect()->route('employes.index')->with('success', 'Empleado eliminado exitosamente.');
    }
    
}
