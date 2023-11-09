<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class UtilisateurController extends Controller
{
   public function liste_utilisateur()
   {
      $utilisateurs = Utilisateur::all();
      return view('utilisateur.liste', compact('utilisateurs'));
   }

   public function ajouter_utilisateur()
   {
      return view('utilisateur.ajouter');
   }

   public function ajouter_utilisateur_traitement(Request $request)
   {
      $request->validate([
         'nom' => 'required',
         'prenom' => 'required',
         'email' => 'required',
         'pwd' => 'required',
         'pwds' => 'required',
         'role' => 'required',
         'etat' => 'required',
      ]);

      $utilisateur =  new Utilisateur();
      $utilisateur->nom = $request->nom;
      $utilisateur->prenom = $request->prenom;
      $utilisateur->email = $request->email;
      $utilisateur->pwd = $request->pwd;
      $utilisateur->pwds = $request->pwds;
      $utilisateur->role = $request->role;
      $utilisateur->etat = $request->etat;
      $utilisateur->save();

      return redirect('/ajouter')->with('status', 'L\'utilisateur enregistrer avec succès');
   }
public function modifier_utilisateur($id){
   $utilisateur = Utilisateur::find($id);

   return view('utilisateur.modifier', compact('utilisateur'));

}
public function modifier_utilisateur_traitement(Request $request)
   {
      $request->validate([
         'nom' => 'required',
         'prenom' => 'required',
         'email' => 'required',
         'pwd' => 'required',
         'pwds' => 'required',
         'role' => 'required',
         'etat' => 'required',
      ]);
      $utilisateur =  Utilisateur::find($request->id);
      $utilisateur->nom = $request->nom;
      $utilisateur->prenom = $request->prenom;
      $utilisateur->email = $request->email;
      $utilisateur->pwd = $request->pwd;
      $utilisateur->pwds = $request->pwds;
      $utilisateur->role = $request->role;
      $utilisateur->etat = $request->etat;
      $utilisateur->update();

      return redirect('/utilisateur')->with('status', 'L\'utilisateur est modifié avec succès');
 
   }

   public function supprimer_utilisateur($id)
   {
      $utilisateur = Utilisateur::find($id);
      $utilisateur->delete();

      return redirect('/utilisateur')->with('status', 'L\'utilisateur supprimer avec succès');
   }
}
