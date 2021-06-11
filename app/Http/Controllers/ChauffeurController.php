<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Chauffeur\AddRequest;
use App\Http\Requests\Chauffeur\UpdateRequest;

use App\Chauffeur;

class ChauffeurController extends Controller
{
    public function __construct(Chauffeur $chauffeur)
    {
        $this->middleware('auth');
        $this->chauffeur = $chauffeur;
    }


    public function index(){
        return view('chauffeur.index',[
            "chauffeurs"=>$this->chauffeur->getItems()        
        ]);
    }

    public function add(AddRequest $request){
        $chauffeur = new Chauffeur();
        $chauffeur->nom_prenom = $request->nom_prenom;
        $chauffeur->adresse = $request->adresse;
        $chauffeur->tel_1 = $request->tel_1;
        $chauffeur->tel_2 = $request->tel_2;
        $chauffeur->tel_3 = $request->tel_3;
        $chauffeur->date_naissance = $request->date_naissance;
        $chauffeur->numero_cin_passeport = $request->numero_cin_passeport;
        $chauffeur->numero_permis = $request->numero_permis;
        $chauffeur->type_permis = $request->type_permis;
        $chauffeur->date_derniere_visite_medicale = $request->date_derniere_visite_medicale;
        $chauffeur->date_prochaine_visite_medicale = $request->date_prochaine_visite_medicale;
        $chauffeur->remarque = $request->remarque;
        $chauffeur->documents_associes = $request->documents_associes;
        $chauffeur->save();

        return redirect()->route('chauffeur');
    }

    public function update(UpdateRequest $request){
        // $fournisseur = new Fournisseur();
        $chauffeur = $this->chauffeur->getItem($request->id);
        // dd($fournisseur);
        $chauffeur->nom_prenom = $request->nom_prenom;
        $chauffeur->adresse = $request->adresse;
        $chauffeur->tel_1 = $request->tel_1;
        $chauffeur->tel_2 = $request->tel_2;
        $chauffeur->tel_3 = $request->tel_3;
        $chauffeur->date_naissance = $request->date_naissance;
        $chauffeur->numero_cin_passeport = $request->numero_cin_passeport;
        $chauffeur->numero_permis = $request->numero_permis;
        $chauffeur->type_permis = $request->type_permis;
        $chauffeur->date_derniere_visite_medicale = $request->date_derniere_visite_medicale;
        $chauffeur->date_prochaine_visite_medicale = $request->date_prochaine_visite_medicale;
        $chauffeur->remarque = $request->remarque;
        $chauffeur->documents_associes = $request->documents_associes;
        $chauffeur->save();

        return redirect()->route('chauffeur');
    }

    public function destroy(Request $request){

        $chauffeur = $this->chauffeur->getItem($request->get('id'));
        if(!$chauffeur) return redirect()->route('chauffeur')->with("error","chauffeur n' exist pas");
        $chauffeur->delete();
        return redirect()->route('chauffeur')->with("success","chauffeur a ete supprimer");
    }
}
