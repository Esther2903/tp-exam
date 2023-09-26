<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function index(){
        // récupérer les différents enrégistrements de la table options
        $options=Option::all();
        return view('inscriptionDEC', compact('options'));
        /* return view('inscriptionDEC',[
            'options'=>Option::all()
        ]); */
    }

    public function store(Request $request) {
        /* dd($request->all()); */
        /* $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'datnais'=>'required',
            'ville'=>'required',
            'sexe'=>'required',
            'option_id'=>'required',
        ]); */

        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->datnais = $request->datnais;
        $etudiant->ville = $request->ville;
        $etudiant->sexe = $request->sexe;
        $etudiant->option_id = $request->option_id;

        $etudiant->save();
        return redirect()->route('inscription')->with('success', 'Etudiant enregistré avec succès');
    }

    public function recherche(Request $request){
        $options=Option::all();
        $recherche = $request->recherche;
        $etudiants = Etudiant::query()
                ->where('option_id', 'LIKE', '%' . $recherche . '%')
                ->get();
        return view('rechercheDEC', compact('options', 'etudiants'));
    }

    public function menu() {
        return view('menuDEC');
    }

    public function info() {
        return view('infoDEC');
    }

    public function indexDEC() {
        return view('indexDEC');
    }
}
