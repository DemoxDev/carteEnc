<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Stage;

class StageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagesEtudiant = Stage::where('id_Etudiant', auth()->user()->id)->get();
        return view('pages.index-stage', compact('stagesEtudiant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.ajout-stage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //récuperation des données du stage
        $stageEtudiant = new Stage();
        $stageEtudiant->nomEntreprise = $request->get('nomEntrepriseFormulaire');
        $stageEtudiant->villeEntreprise = $request->get('villeEntrepriseFormulaire');
        $stageEtudiant->dateDebut = $request->get('dateDebut');
        $stageEtudiant->dateFin = $request->get('dateFin');
        $stageEtudiant->id_Etudiant = Auth::id();

        $stageEtudiant->save();
        //redirection vers dashboard
        return redirect('dashboard');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stage = Stage::find($id); 
        $stage->nomEntreprise = $request->input('nomEntrepriseFormulaire');
        $stage->villeEntreprise = $request->input('villeEntrepriseFormulaire');
        $stage->dateDebut = $request->input('dateDebut');
        $stage->dateFin = $request->input('dateFin');
        $stage->id_Etudiant = Auth::id();
        $stage->save();

        return redirect('/stages')->with('success', 'Stage modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stage = Stage::find($id); 
        $stage->delete();

        return redirect('/stages')->with('success', 'Stage supprimé avec succès.');
    }
}
