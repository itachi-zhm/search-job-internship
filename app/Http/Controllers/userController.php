<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    

public function create(Request $request)
{
    // Validation des données
    $validatedData = $request->validate([
        'nom' => ['required', 'string', 'max:50'],
        'prenom' => ['required', 'string', 'max:50'],
        'email' => ['required', 'string', 'email', 'max:120', 'unique:users'],
        'password' => ['required', 'string', 'min:8'],
        'ville' => ['required','string','max:100'],
        'adresse' => ['required', 'string', 'max:300'],
        'num_tel' => ['required', 'string', 'max:20'],
        'niveau_scolaire' => 'required|in:bac,bac+2,bac+3,bac+4,bac+5,doctorant',
        'cv' => 'required|mimes:pdf|max:2048',
        'image' => ['nullable', 'image', 'mimes:png,jpg,svg','max:2048'],
    ]);

    // Téléchargement de l'image de profil
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imageFile = $request->file('image');
        if ($imageFile->isValid()) {
            $fileName = 'image_' . uniqid() . '.' . $imageFile->getClientOriginalExtension();
            $imagePath = $imageFile->storeAs('user/images', $fileName, 'public');
        }
    }

    // Téléchargement du CV
    $cvPath = null;
    if ($request->hasFile('cv')) {
        $cvFile = $request->file('cv');
        $fileName = 'cv_' . uniqid() . '.' . $cvFile->getClientOriginalExtension();
        $cvPath = $cvFile->storeAs('user/cv', $fileName, 'public');
    }
    // Création de l'utilisateur
    $user = new User([
        'nom' => $validatedData['nom'],
        'prenom' => $validatedData['prenom'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
        'ville' => $validatedData['ville'],
        'adresse' => $validatedData['adresse'],
        'num_tel' => $validatedData['num_tel'],
        'niveau_scolaire' => $validatedData['niveau_scolaire'],
        'image' => $imagePath,
        'cv' => $cvPath,
    ]);

    $save=$user->save();

    if( $save ){
        return redirect()->back()->with('success','You are now registered successfully');
    }else{
        return redirect()->back()->with('fail','Something went wrong, failed to register');
    }
}


function check(Request $request){
    //Validate inputs
    $request->validate([
       'email'=>'required|email|exists:users,email',
       'password'=>'required|min:8|max:30'
    ],[
        'email.exists'=>'This email is not exists on users table'
    ]);

    $creds = $request->only('email','password');
    if( Auth::guard('web')->attempt($creds) ){
        return redirect()->route('user.home');
    }else{
        return redirect()->route('user.login')->with('fail','Incorrect credentials');
    }
}

    function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('user.home');
    }

    public function afficherCandidaturesUser($id_user)
    {
        $user = User::findOrFail($id_user);
        $candidatures = $user->candidatures;

        return view('candidatures_index', ['candidatures' => $candidatures]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.user.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        // ...
        $validatedData = $request->validate([
            'nom' => ['required', 'string', 'max:50'],
            'prenom' => ['required', 'string', 'max:50'],
            'ville' => ['required','string','max:100'],
            'adresse' => ['required', 'string', 'max:300'],
            'num_tel' => ['required', 'string', 'max:20'],
            'niveau_scolaire' => 'required|in:bac,bac+2,bac+3,bac+4,bac+5,doctorant',
            'cv' => 'mimes:pdf|max:2048',
            'image' => ['nullable', 'image', 'mimes:png,jpg,svg','max:2048'],
        ]);

        $user->update($validatedData);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            if ($imageFile->isValid()) {
                $fileName = 'image_' . uniqid() . '.' . $imageFile->getClientOriginalExtension();
                $imagePath = $imageFile->storeAs('user/images', $fileName, 'public');
            }
            // Mettre à jour le chemin de l'image dans la base de données
            $user->image = $imagePath;
            $user->save();
        }

        // Téléchargement du CV
        $cvPath = null;
        if ($request->hasFile('cv')) {
            $cvFile = $request->file('cv');
            $fileName = 'cv_' . uniqid() . '.' . $cvFile->getClientOriginalExtension();
            $cvPath = $cvFile->storeAs('user/cv', $fileName, 'public');
            $user->cv = $cvPath;
            $user->save();
        }

        return redirect()->route('user.home');
    }

}
