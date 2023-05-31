<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\entrepriseController;
use App\Http\Controllers\offreController;
use App\Http\Controllers\stageController;
use App\Http\Controllers\emploiController;
use App\Http\Controllers\WelcomeController;

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


Route::prefix('user')->name('user.')->group(function () {

    Route::middleware(['guest:web', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'user_login')->name('login');
        Route::view('/register', 'user_register')->name('register');
        Route::post('/create', [userController::class, 'create'])->name('create');
        Route::post('/check', [userController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:web', 'PreventBackHistory'])->group(function () {
        Route::view('/espace', 'espace_user')->name('espace');
        Route::post('/logout', [userController::class, 'logout'])->name('logout');
        //Route::get('/add-new',[userController::class,'add'])->name('add');
    });
});

Route::view('/about', 'about')->name('about');
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::view('/resume', 'resume')->name('resume');
Route::view('/offres', 'offres')->name('offres');
Route::view('/company-detail', 'company-detail')->name('company-detail');



Route::prefix('entreprise')->name('entreprise.')->group(function () {

    Route::middleware(['guest:entreprise', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'entreprise_login')->name('login');
        Route::view('/register', 'entreprise_register')->name('register');
        Route::post('/create', [entrepriseController::class, 'create'])->name('create');
        Route::post('/check', [entrepriseController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:entreprise', 'PreventBackHistory'])->group(function () {
        Route::view('/espace', 'espace_entreprise')->name('espace');
        Route::post('/logout', [entrepriseController::class, 'logout'])->name('logout');
    });
});

Route::prefix('offre')->name('offre.')->group(function () {
    Route::middleware(['auth:entreprise'])->group(function () {

        Route::view('/create', 'create_offre')->name('create');
        Route::post('/store', [offreController::class, 'store'])->name('store');
    });
});

Route::middleware(['auth:entreprise'])->group(function () {

    Route::get('stage/create/{id_offre}', [stageController::class, 'create'])->name('stage.create');
    Route::post('stage/store', [stageController::class, 'store'])->name('stage.store');
    Route::get('emploi/create/{id_offre}', [emploiController::class, 'create'])->name('emploi.create');
    Route::post('emploi/store', [emploiController::class, 'store'])->name('emploi.store');
});

Route::get('/offres', [OffreController::class, 'afficherOffres']);



Route::get('/', [WelcomeController::class, 'index']);
Route::get('/offres/{id}', [OffreController::class, 'show'])->name('offre.show');

Route::get('/offre', [OffreController::class, 'afficherOffresParDomaine'])->name('offres.domaine');
