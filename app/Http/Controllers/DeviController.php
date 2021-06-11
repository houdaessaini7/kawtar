<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Devi\AddRequest;
use App\Http\Requests\Devi\UpdateRequest;

use App\Devi;

class DeviController extends Controller
{
    public function __construct(Devi $devi){
        $this->middleware('auth');
        $this->devi = $devi;
    }

    public function index(){
        return view('devi.index',[
            "devi"=>$this->devi->getItems()        
        ]);
    }

    public function add(AddRequest $request){
        $devi = new Devi();
        $devi->id_soc = $request->client;
        $devi->date = $request->date;
        $devi->valide_a_date = $request->valide_a_date;
        $devi->total_ht = $request->total_ht;
        $devi->total_tva = $request->total_tva;
        $devi->total_ttc = $request->total_ttc;
        $devi->status = $request->status;
        $devi->save();
        return redirect()->route('devi');
    }

    public function update(UpdateRequest $request){
        $devi = $this->devi->getItem($request->id);

        $devi->id_soc = $request->client;
        $devi->date = $request->date;
        $devi->valide_a_date = $request->valide_a_date;
        $devi->total_ht = $request->total_ht;
        $devi->total_tva = $request->total_tva;
        $devi->total_ttc = $request->total_ttc;
        $devi->status = $request->status;

        $devi->save();

        return redirect()->route('devi');
    }

    public function destroy(Request $request){

        $devi = $this->devi->getItem($request->get('id'));
        if(!$devi) return redirect()->route('devi')->with("error","devi n'exist pas");
        $devi->delete();
        return redirect()->route('devi')->with("success","devi a ete supprimer");
    }
}
