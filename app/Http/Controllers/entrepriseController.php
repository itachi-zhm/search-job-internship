<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Entreprise;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\MonEmailMailable;

class entrepriseController extends Controller
{
    //
    public function create(Request $request)
{
    // Validation des données
    $validatedData = $request->validate([
        'nom' => ['required', 'string', 'max:200'],
        'email' => ['required', 'string', 'email', 'max:100', 'unique:entreprises'],
        'description' => ['nullable', 'string', 'max:1000'],
        'ville' => ['required','string','max:100'],
        'adresse' => ['nullable', 'string', 'max:300'],
        'domaine' => ['required', 'string', 'in:technologie,santé,industrie,agriculture,restauration'],
        'password' => ['required', 'string', 'min:8'],
        'num_tel' => ['required', 'string', 'max:20'],
        'image' => ['nullable', 'image', 'mimes:png,jpg,svg'],
    ]);

    // Téléchargement de l'image de profil
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imageFile = $request->file('image');
        if ($imageFile->isValid()) {
            $fileName = 'image_' . uniqid() . '.' . $imageFile->getClientOriginalExtension();
            $imagePath = $imageFile->storeAs('entreprise/images', $fileName, 'public');
        }
    }

    // Création de l'entreprise
    $entreprise = new Entreprise([
        'nom' => $validatedData['nom'],
        'email' => $validatedData['email'],
        'description' => $validatedData['description'],
        'ville' => $validatedData['ville'],
        'adresse' => $validatedData['adresse'],
        'domaine' => $validatedData['domaine'],
        'password' => Hash::make($validatedData['password']),
        'num_tel' => $validatedData['num_tel'],
        'image' => $imagePath,
    ]);

    $save=$entreprise->save();

    if( $save ){
        return redirect()->back()->with('success','You are now registered successfully');
    }else{
        return redirect()->back()->with('fail','Something went wrong, failed to register');
    }
}





    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:entreprises,email',
           'password'=>'required|min:8|max:30'
        ],[
            'email.exists'=>'This email is not exists in admins table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('entreprise')->attempt($creds) ){
            return redirect()->route('entreprise.home');
        }else{
            return redirect()->route('entreprise.login')->with('fail','Incorrect credentials');
        }
   }

   function logout(){
       Auth::guard('entreprise')->logout();
       return redirect()->route('entreprise.login');
   }


   public function afficherOffresEntreprise($id_entreprise)
    {
        $entreprise = Entreprise::find($id_entreprise);
        $offres = $entreprise->offres;

        return view('offres_index', ['offres' => $offres]);
    }
    public function afficherEmploiEntreprise($id_entreprise)
    {
        $entreprise = Entreprise::findOrFail($id_entreprise);

        $offresEmploi = $entreprise->offres()->with('emploi')->where('type_offre', 'emploi')->get();

        return view('emplois_entreprise_index', [
            'emplois' => $offresEmploi,
        ]);
    }

    public function afficherStageEntreprise($id_entreprise)
    {
        $entreprise = Entreprise::findOrFail($id_entreprise);
        
        $offresStage = $entreprise->offres()->with('stage')->where('type_offre', 'stage')->get();
        return view('stages_entreprise_index', [
            'stages' => $offresStage,
        ]);
        
    }

    //editer
    public function edit($id)
    {
        $entreprise = Entreprise::findOrFail($id);
        
        return view('dashboard.entreprise.edit', compact('entreprise'));
    }

    //update
    public function update(Request $request, $id)
    {
        $entreprise = Entreprise::findOrFail($id);
        // ...
        $validatedData = $request->validate([
            'nom' => ['required', 'string', 'max:200'],
            'description' => ['nullable', 'string', 'max:1000'],
            'ville' => ['required','string','max:100'],
            'adresse' => ['nullable', 'string', 'max:300'],
            'domaine' => ['required', 'string', 'in:technologie,santé,industrie,agriculture,restauration'],
            'num_tel' => ['required', 'string', 'max:20'],
            'image' => ['nullable', 'image', 'mimes:png,jpg,svg'],

        ]);

        $entreprise->update($validatedData);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            if ($imageFile->isValid()) {
                $fileName = 'image_' . uniqid() . '.' . $imageFile->getClientOriginalExtension();
                $imagePath = $imageFile->storeAs('entreprise/images', $fileName, 'public');
            }
            // Mettre à jour le chemin de l'image dans la base de données
            $entreprise->image = $imagePath;
            $entreprise->save();
        }

        return redirect()->route('entreprise.home');
    }



    public function envoyerEmail(Request $request)
    {
        $sujet = $request->input('sujet');
        $contenu = $request->input('contenu');
        $emailDestinataire = $request->input('email_destinataire');
        Mail::to($emailDestinataire)
            ->send(new MonEmailMailable($sujet, $contenu));

        // Autres actions après l'envoi de l'e-mail

        return redirect()->back()->with('success', 'E-mail envoyé avec succès');
    }



}
