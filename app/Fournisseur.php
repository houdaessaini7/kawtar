<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Fournisseur extends Model
{
    
    public function getItems(){
        return Self::all();
    }

    public function getItem($id){
        return Self::find($id);
    }
    

}
