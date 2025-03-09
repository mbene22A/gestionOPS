<?php

namespace App\Http\Controllers;
use App\Models\Etablissement;
use Illuminate\Http\Request;

class EtablissementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etablissements = Etablissement::all();
        return view('etablissement.index', compact('etablissements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $etablissement = new etablissement();
        return view('etablissement.create',compact('etablissement'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'adresse' => 'required|string',
            'contact' => 'required|string',
            'nbre_classes' => 'required|integer',
            
        ]);
        Etablissement::create($request->all());
        
        return redirect()->route('etablissement.index')->with('success', 'Etablissement créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $etablissement = Etablissement::find($id);
        return view('etablissement.show', compact('etablissement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    

       $etablissement = Etablissement::find($id);
        
       return view('etablissement.edit', compact('etablissement'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $etablissement = Etablissement::findOrFail($id);

        
        $etablissement->nom = $request['nom'];
        $etablissement->adresse = $request['adresse'];
        $etablissement->contact = $request['contact'];
        $etablissement->nbre_classes = $request['nbre_classes'];
        $etablissement->save();
        return redirect('etablissement')->with('success','etablissement modidie avec succes');

        // $request->validate([
        //     'nom' => 'required|string',
        //     'adresse' => 'required|string',
        //     'contact' => 'required|string',
        //     'nbre_classes' => 'required|integer',
            
        // ]);


       
        // $etablissement::update($request->all());

        // return redirect()->route('etablissement.update')->with('success', 'Etablissement mis à jour avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       

        
       // $etablissement=new Etablissement();
        $etablissement = Etablissement::findOrFail($id);
        $etablissement->delete();
        //return redirect('etablissement');
       return redirect()->route('etablissement.index')->with('success', 'Etablissement supprimé avec succès');


        // $etablissement = Etablissement::find($id);
        // $etablissement->delete();

        // return redirect()->route('etablissement.index')->with('success', 'Etablissement supprimé avec succès');
    
    }
}
