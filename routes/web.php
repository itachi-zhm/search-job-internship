<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\entrepriseController;
use App\Http\Controllers\offreController;
use App\Http\Controllers\stageController;
use App\Http\Controllers\emploiController;
use App\Http\Controllers\candidatureController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('user')->name('user.')->group(function(){
  
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.user.login')->name('login');
          Route::view('/register','dashboard.user.register')->name('register');
          Route::post('/create',[userController::class,'create'])->name('create');
          Route::post('/check',[userController::class,'check'])->name('check');
    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
          Route::view('/home','dashboard.user.home')->name('home');
          Route::post('/logout',[userController::class,'logout'])->name('logout');
          
    });

});

Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
    Route::get('/user/{id_user}/candidatures', [userController::class, 'afficherCandidaturesUser'])->name('user.candidatures');
});

Route::prefix('entreprise')->name('entreprise.')->group(function(){
       
    Route::middleware(['guest:entreprise','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.entreprise.login')->name('login');
          Route::view('/register','dashboard.entreprise.register')->name('register');
          Route::post('/create',[entrepriseController::class,'create'])->name('create');
          Route::post('/check',[entrepriseController::class,'check'])->name('check');
    });

    Route::middleware(['auth:entreprise','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.entreprise.home')->name('home');
        Route::post('/logout',[entrepriseController::class,'logout'])->name('logout');
    });

});

Route::prefix('offre')->name('offre.')->group(function(){
    Route::middleware(['auth:entreprise'])->group(function(){

        Route::view('/create','offre_form')->name('create');
        Route::post('/store',[offreController::class,'store'])->name('store');
    });
});

Route::middleware(['auth:entreprise'])->group(function(){

    Route::get('stage/create/{id_offre}',[stageController::class,'create'])->name('stage.create');
    Route::post('stage/store',[stageController::class,'store'])->name('stage.store');
    Route::get('emploi/create/{id_offre}',[emploiController::class,'create'])->name('emploi.create');
    Route::post('emploi/store',[emploiController::class,'store'])->name('emploi.store');
    Route::get('/entreprises/{id_entreprise}/offres', [entrepriseController::class,'afficherOffresEntreprise'])->name('offres.entreprise');
    Route::delete('/offres/{id_offre}/destroy', [OffreController::class, 'destroy'])->name('offres.destroy');
    Route::get('/offres/{id_entreprise}/candidatures', [candidatureController::class, 'afficherCandidaturesOffre'])->name('offres.candidatures');
    Route::get('/candidature/{id_candidature}/traiter',[candidatureController::class,'traiterCandidature'])->name('traiter.candidature');
    Route::view('/candidature/{email_user}/rdv','candidature_rdv')->name('candidature_rdv');
    Route::post('/traiter_email', [entrepriseController::class, 'envoyerEmail'])->name('envoyer_email');
    Route::get('/offre/{id_entreprise}/emploi',[entrepriseController::class, 'afficherEmploiEntreprise'])->name('emploi.entreprise');
    Route::get('/offre/{id_entreprise}/stage',[entrepriseController::class, 'afficherStageEntreprise'])->name('stage.entreprise');
    //Route::delete('/stages/{id_offre}/destroy', [stageController::class, 'destroy'])->name('stages.destroy');
    Route::put('/emploi/{id_offre}/update', [OffreController::class, 'update'])->name('emploi.update');
    Route::get('emploi/{id_offre}/editer',[offreController::class, 'edit'])->name('emploi.editer');
    Route::get('stage/{id_offre}/editer',[offreController::class, 'edit'])->name('stage.editer');
    Route::put('/stage/{id_offre}/update', [OffreController::class, 'update'])->name('stage.update');
    Route::get('entreprise/{id_entreprise}/editer',[entrepriseController::class,'edit'])->name('entreprise.editer');
    Route::put('/entreprise/{id_entreprise}/update',[entrepriseController::class,'update'])->name('entreprise.update');
});




Route::get('/stages/index', [stageController::class, 'index'])->name('stages.index');
Route::get('/emplois/index', [emploiController::class, 'index'])->name('emplois.index');



Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
    Route::get('offre/postuler',[candidatureController::class, 'postuler'])->name('offre.postuler');
    Route::get('user/{id_user}/editer',[userController::class,'edit'])->name('user.editer');
    Route::put('user/{id_user}/update',[userController::class,'update'])->name('user.update');
});

