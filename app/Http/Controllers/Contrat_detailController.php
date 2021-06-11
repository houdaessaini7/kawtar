<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Contrat_detail\AddRequest;
use App\Http\Requests\Contrat_detail\UpdateRequest;

use App\ContratDetail;

class Contrat_detailController extends Controller
{
    public function __construct(ContratDetail $contrat_detail)
    {
        $this->middleware('auth');
        $this->contrat_detail = $contrat_detail;
    }


    public function index(){
        // dd("hhhh");
        return view('contrat_detail.index',[
            "contrat_details"=>$this->contrat_detail->getItems()        
        ]);
    }

    public function add(AddRequest $request){
        $contrat_detail = new ContratDetail();
        $contrat_detail->contrats_id = $request->contrat;
        $contrat_detail->engins = $request->engins;
        $contrat_detail->frais = $request->frais;
        $contrat_detail->chauffeur_1 = $request->chauffeur_1;
        $contrat_detail->chauffeur_2 = $request->chauffeur_2;
        $contrat_detail->chauffeur_3 = $request->chauffeur_3;
        $contrat_detail->save();
        return redirect()->route('contrat_detail');
    }

    public function update(UpdateRequest $request){

        $contrat_detail = $this->contrat_detail->getItem($request->id);
        $contrat_detail->contrats_id = $request->contrat;
        $contrat_detail->engins = $request->engins;
        $contrat_detail->frais = $request->frais;
        $contrat_detail->chauffeur_1 = $request->chauffeur_1;
        $contrat_detail->chauffeur_2 = $request->chauffeur_2;
        $contrat_detail->chauffeur_3 = $request->chauffeur_3;
        $contrat_detail->save();
        return redirect()->route('contrat_detail');
    }

    public function destroy(Request $request){

        $contrat_detail = $this->contrat_detail->getItem($request->get('id'));
        if(!$contrat_detail) return redirect()->route('contrat_detail')->with("error","contrat_detail n'exist pas");
        $contrat_detail->delete();
        return redirect()->route('contrat_detail')->with("success","contrat_detail a ete supprimer");
    }
}
