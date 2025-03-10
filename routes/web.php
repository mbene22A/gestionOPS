<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\ProfesseurController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index'); 
});


Route::get('/voir', [EtablissementController::class,'index']);
Route::get('/etablissement', [EtablissementController::class, 'index'])->name('etablissement.index');
Route::get('/etablissement/create', [EtablissementController::class, 'create'])->name('etablissement.create');
Route::post('/etablissement', [EtablissementController::class, 'store'])->name('etablissement.store');
Route::get('/etablissement/{id}/edit', [EtablissementController::class, 'edit'])->name('etablissement.edit');
Route::put('/etablissement/{id}', [EtablissementController::class, 'update'])->name('etablissement.update');
Route::get('/etablissement/{id}', [EtablissementController::class, 'show'])->name('etablissement.show');
Route::delete('/etablissement/{id}', [EtablissementController::class, 'destroy'])->name('etablissement.destroy');

Route::get('/voirClasse', [ClasseController::class,'index']);
Route::get('/classe', [ClasseController::class, 'index'])->name('classe.index');
Route::get('/classe/create', [ClasseController::class, 'create'])->name('classe.create');
Route::post('/classe', [ClasseController::class, 'store'])->name('classe.store');
Route::get('/classe/{id}/edit', [ClasseController::class, 'edit'])->name('classe.edit');
Route::put('/classe/{id}', [ClasseController::class, 'update'])->name('classe.update');
Route::get('/classe/{id}', [ClasseController::class, 'show'])->name('classe.show');
Route::delete('/classe/{id}', [ClasseController::class, 'destroy'])->name('classe.destroy');



Route::get('/voirProfesseur', [ProfesseurController::class,'index']);
Route::get('/professeur', [ProfesseurController::class, 'index'])->name('professeur.index');
Route::get('/professeur/create', [ProfesseurController::class, 'create'])->name('professeur.create');
Route::post('/professeur', [ProfesseurController::class, 'store'])->name('professeur.store');
Route::get('/professeur/{id}/edit', [ProfesseurController::class, 'edit'])->name('professeur.edit');
Route::put('/professeur/{id}', [ProfesseurController::class, 'update'])->name('professeur.update');
Route::get('/professeur/{id}', [ProfesseurController::class, 'show'])->name('professeur.show');
Route::delete('/professeur/{id}', [ProfesseurController::class, 'destroy'])->name('professeur.destroy');