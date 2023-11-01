<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DossierController extends Controller
{
    public function ajouter_dossier(){
        return view('dossier.ajouter');
       }
}
