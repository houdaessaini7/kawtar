<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Devi extends Model
{
    public function getItems(){
        return Self::all();
    }

    public function getItem($id){
        return Self::find($id);
    }  

    public function client(){
        return Self::belongsTo('App\Client','id_soc','id');
    }
    public function devis_details(){
        return Self::hasMany(DevisDetail::class,'devis_id');
    }
    
}
