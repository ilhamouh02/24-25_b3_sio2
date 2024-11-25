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
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
    
        Role::create($request->all()); // Enregistre les données dans la base
        return redirect()->route('roles.index')->with('success', 'Rôle créé avec succès.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = Role::findOrFail($id); // Trouve un rôle par ID
    return view('roles.show', compact('role')); // Vue pour afficher un rôle
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::findOrFail($id);
        return view('roles.edit', compact('role')); // Vue contenant le formulaire d'édition
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
    
        $role = Role::findOrFail($id);
        $role->update($request->all()); // Met à jour les données
        return redirect()->route('roles.index')->with('success', 'Rôle mis à jour avec succès.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete(); // Supprime le rôle
        return redirect()->route('roles.index')->with('success', 'Rôle supprimé avec succès.');
    }
}
