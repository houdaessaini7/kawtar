<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Client\AddRequest;
use App\Http\Requests\Client\UpdateRequest;
use App\Client;

class ClientController extends Controller
{
    public function __construct(Client $client)
    {
        $this->middleware('auth');
        $this->client = $client;
    }


    public function index(){
        return view('clients.index',[
            "clients"=>$this->client->getItems()        
        ]);
    }

    public function add(AddRequest $request){
        $client = new Client();
        $client->raison_sociale = $request->raison_sociale;
        $client->adresse = $request->adresse;
        $client->site_web = $request->site_web;
        $client->tel_fixe = $request->tel_fixe;
        $client->mail = $request->mail;
        $client->numero_cin_passeport = $request->numero_cin_passeport;
        $client->tel_1 = $request->tel_1;
        $client->tel_2 = $request->tel_2;
        $client->tel_3 = $request->tel_3;
        $client->mode_reglement = $request->mode_reglement;
        $client->remarque = $request->remarque;
        $client->documents_associes = $request->documents_associes;
        $client->save();

        return redirect()->route('client');
    }

    public function update(UpdateRequest $request){
        $client = $this->client->getItem($request->id);
        $client->raison_sociale = $request->raison_sociale;
        $client->adresse = $request->adresse;
        $client->tel_fixe = $request->tel_fixe;
        $client->mail = $request->mail;
        $client->numero_cin_passeport = $request->numero_cin_passeport;
        $client->tel_1 = $request->tel_1;
        $client->tel_2 = $request->tel_2;
        $client->tel_3 = $request->tel_3;
        $client->mode_reglement = $request->mode_reglement;
        $client->remarque = $request->remarque;
        $client->documents_associes = $request->documents_associes;

        $client->save();

        return redirect()->route('client');
    }

    public function destroy(Request $request){

        $client = $this->client->getItem($request->get('id'));
        if(!$client) return redirect()->route('client')->with("error","le client n'exist pas");
        $client->delete();
        return redirect()->route('client')->with("success","le client a ete supprimer");
    }
}
