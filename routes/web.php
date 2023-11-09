<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\DossierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;

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
Route::get('/utilisateur', [UtilisateurController::class, 'liste_utilisateur']);
Route::get('/ajouter', [UtilisateurController::class, 'ajouter_utilisateur']);
Route::get('/modifier_utilisateur/{id}', [UtilisateurController::class, 'modifier_utilisateur']);
Route::post('/modifier/traitement', [UtilisateurController::class, 'modifier_utilisateur_traitement']);
Route::get('/supprimer_utilisateur/{id}', [UtilisateurController::class, 'supprimer_utilisateur']);
Route::post('/ajouter/traitement', [UtilisateurController::class, 'ajouter_utilisateur_traitement']);
Route::get('/ajouter_dossier', [DossierController::class, 'ajouter_dossier']);
Route::get('/', [AccueilController::class, 'accueil']);
