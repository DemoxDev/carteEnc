<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarteEtudiant;

class CarteEncController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartesEtudiant = CarteEtudiant::all();
        return view('pages.index', compact('cartesEtudiant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.creation-carte');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //récuperation des données étudiant
        $carteEtudiant = new CarteEtudiant();
        $carteEtudiant->nomEtudiant = $request->get('nomEtudiantFormulaire');
        $carteEtudiant->prenomEtudiant = $request->get('prenomEtudiantFormulaire');
        $carteEtudiant->email = $request->get('email');
        $carteEtudiant->numero = $request->get('numero');
        if($request->hasFile('cv')){
            $filename = $request->file('cv')->getClientOriginalName();;
            $carteEtudiant->nomcv = $filename;
        }
        $carteEtudiant->date_entree = $request->get('date_entree');
        $carteEtudiant->section = $request->get('section');
        //téléchargement du fichier (cv)
        if($request->hasFile('cv')){
            $file = $request->file('cv');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('public/uploads', $filename);
        }
        //enregistrement dans la BDD
        $carteEtudiant->save();
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
