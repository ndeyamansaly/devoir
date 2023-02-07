<?php

namespace App\Http\Controllers;

use App\Models\etudiant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class EtudiantController extends Controller

{
    public function vu(){

        $etudiant=etudiant::all();

        return view('etudiant',compact('etudiant'));
    }

    
public function enregistrer(Request $request){

    $etudiant= new etudiant();
  
    $etudiant->prenom=$request->prenom;
    $etudiant->nom=$request->nom;
    $etudiant->semestre_id=$request->semestre;
    $etudiant->matiere_id=$request->matiere;
    $etudiant->note=$request->note;
    $etudiant->examen=$request->examen;

    
   
    $etudiant->save();
  
  return redirect('etudiant');
  }
  
  public function detail(Request $request,$id)
  {
     
   
    $etudiant = etudiant::find($id);
  
  
  return view('detail',compact('etudiant'));
  
  }
    //
}
