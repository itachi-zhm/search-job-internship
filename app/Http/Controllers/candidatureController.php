<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidature;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Entreprise;

class candidatureController extends Controller
{
    //
    public function postuler(Request $request)
    {
        $candidature = new Candidature;
        $candidature->date_candidature=Carbon::now();
        $candidature->id_user=Auth::guard('web')->user()->id;
        $candidature->id_offre=$request->input('id_offre');
        $candidature->save();
        return redirect()->back()->with('success','candidature sauvguardé');
    }

    
    public function afficherCandidaturesOffre($id_entreprise)
    {
        $entreprise = Entreprise::findOrFail($id_entreprise);
        $offres = $entreprise->offres;

        $candidatures = Candidature::whereIn('id_offre', $offres->pluck('id_offre'))->with('user')->get();

        return view('candidatures_index', ['candidatures' => $candidatures]);
    }

    public function traiterCandidature($id_candidature)
    {
        $model = Candidature::find($id_candidature);
        if ($model) {
            $model->etat_candidature = 1;
            $model->save();
            return redirect()->back();
        }
    }
}
