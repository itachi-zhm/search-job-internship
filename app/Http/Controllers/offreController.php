<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class offreController extends Controller
{
    
    public function store(Request $request)
    {
        //validation du data
        $validatedData=$request->validate([
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
        $offre->ville=$validatedData['ville'];
        $offre->date_publication=Carbon::now();
        $offre->date_limite = $validatedData['date_limite'];
        $offre->type_offre = $validatedData['type_offre'];
        $offre->id_entreprise = Auth::guard('entreprise')->user()->id;
        $offre->save();
        $offre->refresh();
        if($offre->type_offre == 'stage') {
            return redirect()->route('stage.create', ['id_offre' => $offre->id_offre]);
        }
        elseif($offre->type_offre == 'emploi') {
            return redirect()->route('emploi.create', ['id_offre' => $offre->id_offre]);
        }

    }

}
