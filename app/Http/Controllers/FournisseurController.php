<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\Fournisseur\AddRequest;
use App\Http\Requests\Fournisseur\UpdateRequest;

use App\Fournisseur;

class FournisseurController extends Controller
{

    public function __construct(Fournisseur $fournisseur)
    {
        $this->middleware('auth');
        $this->fournisseur = $fournisseur;
    }


    public function index(){
        return view('fournisseur.index',[
            "fournisseurs"=>$this->fournisseur->getItems()        
        ]);
    }

    public function add(AddRequest $request){
        $fournisseur = new Fournisseur();
        $fournisseur->nom_prenom = $request->full_name;
        $fournisseur->adresse = $request->adress;
        $fournisseur->tel_fixe = $request->phone;
        $fournisseur->site_web = $request->site_web;
        $fournisseur->mail = $request->mail;
        $fournisseur->ninea = $request->ninea;
        $fournisseur->rc = $request->rc;
        $fournisseur->nom_contrat = $request->nom_contrat;
        $fournisseur->fonction = $request->fonction;
        $fournisseur->numero_cin = $request->numero_cin;
        $fournisseur->telephone_1 = $request->phone1;
        $fournisseur->telephone_2 = $request->phone2;
        $fournisseur->telephone_3 = $request->phone3;
        $fournisseur->type_de_fournisseur = $request->type_de_fournisseur;
        $fournisseur->remarque = $request->remarque;
        $fournisseur->documents_associes = $request->documents_associes;
        $fournisseur->save();

        return redirect()->route('fournisseur');
    }

    public function update(UpdateRequest $request){
        // $fournisseur = new Fournisseur();
        $fournisseur = $this->fournisseur->getItem($request->id);
        // dd($fournisseur);
        $fournisseur->nom_prenom = $request->full_name;
        $fournisseur->adresse = $request->adress;
        $fournisseur->tel_fixe = $request->phone;
        $fournisseur->site_web = $request->site_web;
        $fournisseur->mail = $request->mail;
        $fournisseur->ninea = $request->ninea;
        $fournisseur->rc = $request->rc;
        $fournisseur->nom_contrat = $request->nom_contrat;
        $fournisseur->fonction = $request->fonction;
        $fournisseur->numero_cin = $request->numero_cin;
        $fournisseur->telephone_1 = $request->phone1;
        $fournisseur->telephone_2 = $request->phone2;
        $fournisseur->telephone_3 = $request->phone3;
        $fournisseur->type_de_fournisseur = $request->type_de_fournisseur;
        $fournisseur->remarque = $request->remarque;
        $fournisseur->documents_associes = $request->documents_associes;

        $fournisseur->save();

        return redirect()->route('fournisseur');
    }

    public function destroy(Request $request){

        $fournisseur = $this->fournisseur->getItem($request->get('id'));
        if(!$fournisseur) return redirect()->route('fournisseur')->with("error","Fournisseur n' exist pas");
        $fournisseur->delete();
        return redirect()->route('fournisseur')->with("success","Fournisseur a ete supprimer");
    }
}
