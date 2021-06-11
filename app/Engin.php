<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Engin extends Model
{
    public function getItems(){
        return Self::all();
    }

    public function getItem($id){
        return Self::find($id);
    }  

    public function fournisseur(){
        return Self::belongsTo('App\Fournisseur','fournisseur_id','id');
    }
}
