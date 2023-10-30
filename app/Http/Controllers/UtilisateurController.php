<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
   public function liste_utilisateur(){
    return view('utilisateur.liste');
   }

   public function ajouter_utilisateur(){
    return view('utilisateur.ajouter');
   }
}
