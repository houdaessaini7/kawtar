<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Devis_detail\AddRequest;
use App\Http\Requests\Devis_detail\UpdateRequest;

use App\DevisDetail;
use App\Devi;


class Devis_detailController extends Controller
{
    public function __construct(DevisDetail $devis_detail,Devi $devi){
        $this->middleware('auth');
        $this->devis_detail = $devis_detail;
        $this->devi = $devi;
    }

    public function index(Request $request){
        $devi=$this->devi->getItem($request->get('m'));
        // dd($devi->devis_details);
        if (!$devi) return redirect()->route('devi');
        return view('devis_detail.index',[
            "devis_detail"=>$devi->devis_details,
        ]);
    }
    public function add(AddRequest $request){
        $devis_detail = new DevisDetail();
        $devis_detail->devis_id = $request->get('m');
        $devis_detail->engins_id = $request->engin;
        $devis_detail->prix_unit = $request->prix_unit;
        $devis_detail->tva = $request->tva;
        $devis_detail->qte = $request->qte;
        $devis_detail->total_ht = $request->total_ht;
        $devis_detail->total_tva = $request->total_tva;
        $devis_detail->total_ttc = $request->total_ttc;
        $devis_detail->reduction = $request->reduction;
        // $devis_detail->date = $request->date;
        // $devis_detail->date_fin_validite = $request->date_fin_validite;
        $devis_detail->save();
        return redirect('/devis_detail?m='.$request->get('m'));
    }

    public function update(UpdateRequest $request){

        $devis_detail = $this->devis_detail->getItem($request->id);
        // $devis_detail->devis_id = $request->get('m');
        $devis_detail->engins_id = $request->engin;
        $devis_detail->prix_unit = $request->prix_unit;
        $devis_detail->tva = $request->tva;
        $devis_detail->qte = $request->qte;
        $devis_detail->total_ht = $request->total_ht;
        $devis_detail->total_tva = $request->total_tva;
        $devis_detail->total_ttc = $request->total_ttc;
        $devis_detail->reduction = $request->reduction;
        $devis_detail->save();
        // dd($devis_detail->devi);
        return redirect('/devis_detail?m='.$devis_detail->devi->id);
    }

    public function destroy(Request $request){

        $devis_detail = $this->devis_detail->getItem($request->get('id'));
        if(!$devis_detail) return redirect()->route('/devis_detail')->with("error","devis_detail n'exist pas");
        $devis_detail->delete();
        return redirect('/devis_detail?m='.$devis_detail->devi->id);
    }

}
