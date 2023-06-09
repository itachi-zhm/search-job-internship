<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stage;
use App\Models\Offre;

class stageController extends Controller
{
    //
    public function create($id_offre)
    {
        return view('stage_form', ['id_offre' => $id_offre]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'remuneration_stage' => 'required|numeric',
            'lieu_stage' => 'required|max:50',
            'duree_stage' => 'required|numeric',
            'id_offre' => 'required|exists:offres,id_offre'
        ]);

        // Création du stage
        $stage = new Stage;
        $stage->remuneration_stage = $validatedData['remuneration_stage'];
        $stage->lieu_stage = $validatedData['lieu_stage'];
        $stage->duree_stage = $validatedData['duree_stage'];
        $stage->id_offre = $validatedData['id_offre'];
        $stage->save();
        return redirect()->route('entreprise.home');
    }

    public function index()
    {
        $stages = Stage::with('offre', 'offre.entreprise')->get();

        return view('stage_index', compact('stages'));
    }
<<<<<<< HEAD
=======

    public function destroy($id_offre)
    {
        $offre = Offre::findOrFail($id_offre);
        $offre->delete();

        return redirect()->back()->with('success', 'L\'offre a été supprimée avec succès.');
    }

>>>>>>> 8e02f4232295ccca015242cb5beb6664f931c232
}
