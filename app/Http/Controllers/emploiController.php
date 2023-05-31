<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emploi;

class emploiController extends Controller
{
    //
    public function create($id_offre)
    {
        return view('emploi_form', ['id_offre' => $id_offre]);
    }

    public function store(Request $request)
    {
        //validation des données
        $validatedData = $request->validate([
            'salaire' => 'required|numeric',
            'lieu_emploi' => 'required|max:50',
            'type_contrat' => 'required|max:200',
            'id_offre' => 'required|exists:offres,id_offre'
        ]);

        // Création d'emploi
        $emploi = new Emploi;
        $emploi->salaire = $validatedData['salaire'];
        $emploi->lieu_emploi = $validatedData['lieu_emploi'];
        $emploi->type_contrat = $validatedData['type_contrat'];
        $emploi->id_offre = $validatedData['id_offre'];
        $emploi->save();
        $save = $emploi->save();

        if ($save) {
            if ($save) {
                return redirect()->back()->with('success', 'You are now registered successfully');
            } else {
                return redirect()->back()->with('fail', 'Something went wrong, failed to register');
            }
        }
    }

    public function index()
    {
        $emplois = Emploi::with('offre', 'offre.entreprise')->get();

        return view('emploi_index', compact('emplois'));
    }
}
