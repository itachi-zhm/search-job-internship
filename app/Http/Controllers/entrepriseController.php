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
        'adresse' => ['nullable', 'string', 'max:300'],
        'password' => ['required', 'string', 'min:8'],
        'num_tel' => ['required', 'string', 'max:20'],
        'image' => ['nullable', 'image', 'mimes:png,jpg,svg'],
    ]);

    // Téléchargement de l'image de profil
    $imageData = null;
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageData = file_get_contents($image);
    }

    // Création de l'entreprise
    $entreprise = new Entreprise([
        'nom' => $validatedData['nom'],
        'email' => $validatedData['email'],
        'description' => $validatedData['description'],
        'adresse' => $validatedData['adresse'],
        'password' => Hash::make($validatedData['password']),
        'num_tel' => $validatedData['num_tel'],
        'image' => $imageData,
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
       return redirect('/');
   }
}
