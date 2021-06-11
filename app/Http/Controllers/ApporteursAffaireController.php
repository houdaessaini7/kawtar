<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Apporteurs_affaire\AddRequest;
use App\Http\Requests\Apporteurs_affaire\UpdateRequest;

use App\ApporteursAffaire;

class ApporteursAffaireController extends Controller
{
    public function __construct(ApporteursAffaire $apporteurs_affaire)
    {
        $this->middleware('auth');
        $this->apporteurs_affaire = $apporteurs_affaire;
    }


    public function index(){
        return view('apporteurs_affaire.index',[
            "apporteurs_affaire"=>$this->apporteurs_affaire->getItems()        
        ]);
    }

    public function add(AddRequest $request){
        $apporteurs_affaire = new ApporteursAffaire();
        $apporteurs_affaire->raison_sociale = $request->raison_sociale;
        $apporteurs_affaire->adresse = $request->adresse;
        $apporteurs_affaire->site_web = $request->site_web;
        $apporteurs_affaire->tel_fixe = $request->tel_fixe;
        $apporteurs_affaire->mail = $request->mail;
        $apporteurs_affaire->ninea = $request->ninea;
        $apporteurs_affaire->rc = $request->rc;
        $apporteurs_affaire->nom_contrat = $request->nom_contrat;
        $apporteurs_affaire->fonction = $request->fonction;
        $apporteurs_affaire->numero_cin_passeport = $request->numero_cin_passeport;
        $apporteurs_affaire->tel_1 = $request->tel_1;
        $apporteurs_affaire->tel_2 = $request->tel_2;
        $apporteurs_affaire->tel_3 = $request->tel_3;
        $apporteurs_affaire->mode_reglement = $request->mode_reglement;
        $apporteurs_affaire->type_apporteur_affaire = $request->type_apporteur_affaire;
        $apporteurs_affaire->remarque = $request->remarque;
        $apporteurs_affaire->document_associes = $request->document_associes;
        $apporteurs_affaire->save();
        return redirect()->route('apporteurs_affaire');
    }

    public function update(UpdateRequest $request){
        $apporteurs_affaire = $this->apporteurs_affaire->getItem($request->id);
        $apporteurs_affaire->raison_sociale = $request->raison_sociale;
        $apporteurs_affaire->adresse = $request->adresse;
        $apporteurs_affaire->site_web = $request->site_web;
        $apporteurs_affaire->tel_fixe = $request->tel_fixe;
        $apporteurs_affaire->mail = $request->mail;
        $apporteurs_affaire->ninea = $request->ninea;
        $apporteurs_affaire->rc = $request->rc;
        $apporteurs_affaire->nom_contrat = $request->nom_contrat;
        $apporteurs_affaire->fonction = $request->fonction;
        $apporteurs_affaire->numero_cin_passeport = $request->numero_cin_passeport;
        $apporteurs_affaire->tel_1 = $request->tel_1;
        $apporteurs_affaire->tel_2 = $request->tel_2;
        $apporteurs_affaire->tel_3 = $request->tel_3;
        $apporteurs_affaire->mode_reglement = $request->mode_reglement;
        $apporteurs_affaire->type_apporteur_affaire = $request->type_apporteur_affaire;
        $apporteurs_affaire->remarque = $request->remarque;
        $apporteurs_affaire->document_associes = $request->document_associes;
        $apporteurs_affaire->save();

        return redirect()->route('apporteurs_affaire');
    }

    public function destroy(Request $request){

        $apporteurs_affaire = $this->apporteurs_affaire->getItem($request->get('id'));
        if(!$apporteurs_affaire) return redirect()->route('apporteurs_affaire')->with("error","apporteurs_affaire n' exist pas");
        $apporteurs_affaire->delete();
        return redirect()->route('apporteurs_affaire')->with("success","apporteurs_affaire a ete supprimer");
    }
}
