<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Contrat\AddRequest;
use App\Http\Requests\Contrat\UpdateRequest;

use App\Contrat;

class ContratController extends Controller
{
    public function __construct(Contrat $contrat)
    {
        $this->middleware('auth');
        $this->contrat = $contrat;
    }


    public function index(){
        return view('contrat.index',[
            "contrats"=>$this->contrat->getItems()        
        ]);
    }

    public function add(AddRequest $request){
        $contrat = new Contrat();
        $contrat->statut_client = $request->statut_client;
        $contrat->Lieux_mobilisation = $request->Lieux_mobilisation;
        $contrat->description_sommaire_travail = $request->description_sommaire_travail;
        $contrat->date_debut= $request->date_debut;
        $contrat->date_derniere_facture = $request->date_derniere_facture;
        $contrat->duree_HJSMA = $request->duree_HJSMA;
        $contrat->duree_quotidienne_travail = $request->duree_quotidienne_travail;
        $contrat->duree_pause = $request->duree_pause;
        $contrat->duree_hebdomadaire_travail = $request->duree_hebdomadaire_travail;
        $contrat->carburant = $request->carburant;
        $contrat->exonere = $request->exonere;
        $contrat->type = $request->type;
        $contrat->save();

        return redirect()->route('contrat');
    }

    public function update(UpdateRequest $request){
        // $fournisseur = new Fournisseur();
        $contrat = $this->contrat->getItem($request->id);
        // dd($fournisseur);
        $contrat->statut_client = $request->statut_client;
        $contrat->Lieux_mobilisation = $request->Lieux_mobilisation;
        $contrat->description_sommaire_travail = $request->description_sommaire_travail;
        $contrat->date_debut= $request->date_debut;
        $contrat->date_derniere_facture = $request->date_derniere_facture;
        $contrat->duree_HJSMA = $request->duree_HJSMA;
        $contrat->duree_quotidienne_travail = $request->duree_quotidienne_travail;
        $contrat->duree_pause = $request->duree_pause;
        $contrat->duree_hebdomadaire_travail = $request->duree_hebdomadaire_travail;
        $contrat->carburant = $request->carburant;
        $contrat->exonere = $request->exonere;
        $contrat->type = $request->type;
        $contrat->save();

        return redirect()->route('contrat');
    }

    public function destroy(Request $request){

        $contrat = $this->contrat->getItem($request->get('id'));
        if(!$contrat) return redirect()->route('contrat')->with("error","contrat n' exist pas");
        $contrat->delete();
        return redirect()->route('contrat')->with("success","contrat a ete supprimer");
    }
}
