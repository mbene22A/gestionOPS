<?php

namespace App\Http\Controllers;
use App\Models\Classe;
use App\Models\Etablissement;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $classes = Classe::all();
        return view('classe.index', compact('classes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // $classes = new Classe();
        $etablissements = Etablissement::all();
        return view('classe.create',compact('etablissements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'niveau' => 'required|string',
            'effectif' => 'required|integer',
            'etablissement_id' => 'required|integer',
            
        ]);
        $classe = new Classe();
        $classe->nom = $request['nom'];
        $classe->niveau = $request['niveau'];
        $classe->effectif = $request['effectif'];
        $classe->etablissement_id = $request['etablissement_id'];
        $classe->save();
        //Classe::create($request->all());
        
        return redirect()->route('classe.index')->with('success', 'classe créée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $classe = Classe::find($id);
        if (!$classe) {
            return redirect()->route('classe.index')->with('error', 'Classe non trouvée.');
        }
    
        // Récupérer tous les établissements
        $etablissements = Etablissement::all();
    
        return view('classe.edit', compact('classe', 'etablissements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'nom' => 'required|string',
        'niveau' => 'required|string',
        'effectif' => 'required|integer',
        'etablissement_id' => 'required|exists:etablissements,id',
    ]);

    $classe = Classe::find($id);

    if (!$classe) {
        return redirect()->route('classe.index')->with('error', 'Classe non trouvée.');
    }

    $classe->nom = $request->input('nom');
    $classe->niveau = $request->input('niveau');
    $classe->effectif = $request->input('effectif');
    $classe->etablissement_id = $request->input('etablissement_id');
    $classe->save(); // Sauvegarder les modifications dans la base de données

    
    return redirect()->route('classe.index')->with('success', 'Classe mise à jour avec succès.');


}
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    $classe = Classe::find($id);
    
    if (!$classe) {
        return redirect()->route('classe.index')->with('error', 'Classe non trouvée.');
    }

    $classe->delete();
    return redirect()->route('classe.index')->with('success', 'Classe supprimée avec succès.');
}

    
}

