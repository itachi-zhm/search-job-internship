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
        'adresse' => ['required', 'string', 'max:300'],
        'num_tel' => ['required', 'string', 'max:20'],
        'image' => ['nullable', 'image', 'mimes:png,jpg,svg'],
    ]);

    // Téléchargement de l'image de profil
    $imageData = null;
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageData = file_get_contents($image);
    }

    // Création de l'utilisateur
    $user = new User([
        'nom' => $validatedData['nom'],
        'prenom' => $validatedData['prenom'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
        'adresse' => $validatedData['adresse'],
        'num_tel' => $validatedData['num_tel'],
        'image' => $imageData,
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
    return redirect('/');
}

}
