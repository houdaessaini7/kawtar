<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ContratDetail extends Model
{
    public function getItems(){
        return Self::all();
    }

    public function getItem($id){
        return Self::find($id);
    }
    public function contrat(){
        return Self::belongsTo('App\Contrat','contrat_id','id');
    }
}
