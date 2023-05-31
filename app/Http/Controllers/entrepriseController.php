<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Entreprise;
use Illuminate\Support\Facades\Hash;

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
            'ville' => ['required', 'string', 'max:100'],
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

        $save = $entreprise->save();

        if ($save) {
            return redirect()->back()->with('success', 'You are now registered successfully');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong, failed to register');
        }
    }





    function check(Request $request)
    {
        //Validate Inputs
        $request->validate([
            'email' => 'required|email|exists:entreprises,email',
            'password' => 'required|min:8|max:30'
        ], [
            'email.exists' => 'This email is not exists in admins table'
        ]);

        $creds = $request->only('email', 'password');

        if (Auth::guard('entreprise')->attempt($creds)) {
            return redirect()->route('entreprise.espace');
        } else {
            return redirect()->route('entreprise.login')->with('fail', 'Incorrect credentials');
        }
    }

    function logout()
    {
        Auth::guard('entreprise')->logout();
        return redirect('/');
    }
}
