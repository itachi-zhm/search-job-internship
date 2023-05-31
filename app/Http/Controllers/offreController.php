<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre;
use App\Models\Entreprise;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class offreController extends Controller
{

    public function store(Request $request)
    {
        //validation du data
        $validatedData = $request->validate([
            'titre_offre' => 'required|max:150',
            'description_offre' => 'required|max:800',
            'ville' => 'required|max:100',
            'date_limite' => 'required|date|after:date_publication',
            'type_offre' => 'required|in:emploi,stage',
        ]);

        // Création de l'offre
        $offre = new Offre;
        $offre->titre_offre = $validatedData['titre_offre'];
        $offre->description_offre = $validatedData['description_offre'];
        $offre->ville = $validatedData['ville'];
        $offre->date_publication = Carbon::now();
        $offre->date_limite = $validatedData['date_limite'];
        $offre->type_offre = $validatedData['type_offre'];
        $offre->id_entreprise = Auth::guard('entreprise')->user()->id;
        $offre->save();
        $offre->refresh();
        if ($offre->type_offre == 'stage') {
            return redirect()->route('stage.create', ['id_offre' => $offre->id_offre]);
        } elseif ($offre->type_offre == 'emploi') {
            return redirect()->route('emploi.create', ['id_offre' => $offre->id_offre]);
        }
    }



    //affichage des offres
    public function afficherOffres()
    {
        // Récupérer toutes les offres d'emploi et de stage
        $offresEmploi = Offre::with('emploi')->where('type_offre', 'emploi')->get();
        $offresStage = Offre::with('stage')->where('type_offre', 'stage')->get();

        return view('all_offres', compact('offresEmploi', 'offresStage'));
    }


    //afficher seulement un offre
    public function show($id)
    {
        $offre = Offre::findOrFail($id);

        return view('show', compact('offre'));
    }

    public function create()
    {
        $entreprises = Entreprise::all();
        return view('offres.create', compact('entreprises'));
    }

    public function edit($id)
    {
        $offre = Offre::findOrFail($id);
        $entreprises = Entreprise::all();
        return view('edit_offre', compact('offre', 'entreprises'));
    }

    public function destroy($id)
    {
        $offre = Offre::findOrFail($id);
        $offre->delete();

        return redirect()->route('welcome')->with('success', 'Offre supprimée avec succès.');
    }

    public function index()
    {
        $offres = Offre::all();
        return view('espace_entreprise', compact('offres'));
    }


    public function afficherOffresParDomaine(Request $request)
    {
        $domaine = $request->input('domaine');

        // Récupérer les offres en fonction du domaine
        $offres = Offre::whereHas('entreprise', function ($query) use ($domaine) {
            $query->where('domaine', $domaine);
        })->get();

        if ($offres->isEmpty()) {
            return redirect()->back()->withInput()->withErrors(["fail" => "Aucune offre trouvée pour le domaine '$domaine'"]);
        }

        return view('cherche_offre', compact('domaine', 'offres'));
    }
}
