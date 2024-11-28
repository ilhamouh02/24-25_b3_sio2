<?php

namespace App\Http\Controllers;

use App\Models\Role; // Import du modèle Role
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // Récupération de tous les rôles
        $roles = Role::all();

        // Transmet les rôles à la vue
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles.create'); // Vue contenant le formulaire de création
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'id' => 'required|unique:roles,id',
        'label' => 'required|string|max:255',
    ]);

    Role::create($request->only(['id', 'label']));

    return redirect()->route('roles.index')->with('success', 'Role created successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $role = Role::findOrFail($id);
        return view('roles.show', compact('role'));
    }
    
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('roles.edit', compact('role'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'label' => 'required|string|max:255',
        ]);
    
        $role = Role::findOrFail($id);
        $role->update($request->only('label'));
        return redirect()->route('roles.index')->with('success', 'Rôle mis à jour avec succès.');
    }
    
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Rôle supprimé avec succès.');
    }
}    