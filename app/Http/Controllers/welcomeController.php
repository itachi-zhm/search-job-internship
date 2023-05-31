<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Offre;

class WelcomeController extends Controller
{
    public function index()
    {
        $offresEmploi = Offre::with('emploi')->where('type_offre', 'emploi')->get();
        $offresStage = Offre::with('stage')->where('type_offre', 'stage')->get();

        return view('welcome', compact('offresEmploi', 'offresStage'));
    }
}
