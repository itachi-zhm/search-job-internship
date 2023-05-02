<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\entrepriseController;

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
          //Route::get('/add-new',[userController::class,'add'])->name('add');
    });

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
