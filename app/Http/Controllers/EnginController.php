<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Engin\AddRequest;
use App\Http\Requests\Engin\UpdateRequest;

use App\Engin;

class EnginController extends Controller
{ 
    public function __construct(Engin $engin)
    {
        $this->middleware('auth');
        $this->engin = $engin;
    }


    public function index(){
        return view('engin.index',[
            "enigns"=>$this->engin->getItems()        
        ]);
    }

    public function add(AddRequest $request){
        // dd($request->fournisseur);
        $engin = new Engin();
        $engin->fournisseur_id = $request->fournisseur;
        $engin->type_engin = $request->type_engin;
        $engin->modele = $request->modele;
        $engin->annee = $request->annee;
        $engin->nombre_heure = $request->nombre_heure;
        $engin->kilometrage = $request->kilometrage;
        $engin->consommation_heure_100km = $request->consommation_heure_100km;
        $engin->date_dernier_controle = $request->date_dernier_controle;
        $engin->date_prochain_controle = $request->date_prochain_controle;
        $engin->numero_police_assurance = $request->numero_police_assurance;
        $engin->compagnie = $request->compagnie;
        $engin->date_fin_validite = $request->date_fin_validite;
        $engin->remarque = $request->remarque;
        $engin->documents_associes = $request->documents_associes;
        $engin->save();
        return redirect()->route('engin');
    }

    public function update(UpdateRequest $request){
        $engin = $this->engin->getItem($request->id);

        $engin->fournisseur_id = $request->fournisseur;
        $engin->type_engin = $request->type_engin;
        $engin->modele = $request->modele;
        $engin->annee = $request->annee;
        $engin->nombre_heure = $request->nombre_heure;
        $engin->kilometrage = $request->kilometrage;
        $engin->consommation_heure_100km = $request->consommation_heure_100km;
        $engin->date_dernier_controle = $request->date_dernier_controle;
        $engin->date_prochain_controle = $request->date_prochain_controle;
        $engin->numero_police_assurance = $request->numero_police_assurance;
        $engin->compagnie = $request->compagnie;
        $engin->date_fin_validite = $request->date_fin_validite;
        $engin->remarque = $request->remarque;
        $engin->documents_associes = $request->documents_associes;

        $engin->save();

        return redirect()->route('engin');
    }

    public function destroy(Request $request){

        $engin = $this->engin->getItem($request->get('id'));
        if(!$engin) return redirect()->route('engin')->with("error","engin n'exist pas");
        $engin->delete();
        return redirect()->route('engin')->with("success","engin a ete supprimer");
    }
}
