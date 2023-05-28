<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stage;

class stageController extends Controller
{
    //
    public function create($id_offre)
    {
        return view('stage_form', ['id_offre' => $id_offre]);
    }

    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'remuneration_stage' => 'required|numeric',
            'duree_stage' => 'required|numeric',
            'id_offre' => 'required|exists:offres,id_offre'
        ]);

        // Création du stage
        $stage = new Stage;
        $stage->remuneration_stage = $validatedData['remuneration_stage'];
        $stage->duree_stage = $validatedData['duree_stage'];
        $stage->id_offre = $validatedData['id_offre'];
        $stage->save();
    }

    public function index()
    {
        $stages = Stage::with('offre', 'offre.entreprise')->get();

        return view('stage_index', compact('stages'));
    }

}
