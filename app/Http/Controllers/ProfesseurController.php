<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professeurs = Professeur::all();
        return view('professeur.index', compact('professeurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $professeur = new professeur();
        return view('professeur.create',compact('professeur'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|string',
            'specialite' => 'required|string',
            
        ]);
        Professeur::create($request->all());
        
        return redirect()->route('professeur.index')->with('success', 'Professeur créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $professeur = Professeur::find($id);
        return view('professeur.show', compact('professeur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
       $professeur = Professeur::find($id);
        
       return view('professeur.edit', compact('professeur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         
        $professeur = Professeur::findOrFail($id);

        
        $professeur->nom = $request['nom'];
        $professeur->prenom = $request['prenom'];
        $professeur->email = $request['email'];
        $professeur->specialite = $request['specialite'];
        $professeur->save();
        return redirect('professeur')->with('success','professeur modidie avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $professeur = Professeur::findOrFail($id);
        $professeur->delete();
       return redirect()->route('professeur.index')->with('success', 'professeur supprimé avec succès');
    }
}
