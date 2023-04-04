<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CarteEtudiant;
use App\Models\Adresse;

class AdresseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $cartesEtudiant = CarteEtudiant::all();
        $adresses = Adresse::where('id_Etudiant', Auth::id())->get();
        return view('pages.index-adresse', compact('adresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.ajout-adresse');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $adresse  = new Adresse();
        $adresse->adresse = $request->input('adresseFormulaire');
        $adresse->CP = $request->input('cpFormulaire');
        $adresse->Ville = $request->input('ville');
        $adresse->Pays = $request->input('pays');
        $adresse->id_Etudiant = Auth::id();
        $adresse->save();
        
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
        //
        $adresse = Adresse::find($id); 
        $adresse->adresse = $request->input('adresseFormulaire');
        $adresse->CP = $request->input('cpFormulaire');
        $adresse->Ville = $request->input('ville');
        $adresse->Pays = $request->input('pays');
        $adresse->id_Etudiant = Auth::id(); 
        $adresse->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $adresse = Adresse::find($id); 
        $adresse->delete();


    }
}
