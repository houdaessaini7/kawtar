<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class DevisDetail extends Model
{
    public function getItems(){
        return Self::all();
    }

    public function getItem($id){
        return Self::find($id);
    }  

    public function devi(){
        return Self::belongsTo('App\Devi','devis_id','id');
    }
    
    public function engin(){
        return Self::belongsTo('App\Engin','engins_id','id');
    }
}
