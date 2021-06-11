<?php $contrat = new App\Contrat();?>

@extends('layouts.app')

@section('content')
<div class=" text-center">
<h1>    mise a jour de engin :</h1>    

    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{route('contrat_detail.update.data')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$contrat_detail->id}}">
                <select  class="form-select"  name="contrat">
                  @foreach ($contrat->getItems() as $item)
                      <option value="{{$item->id}}">{{$item->statut_client}}</option>
                  @endforeach
              </select>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">engins</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="engins" value="{{$contrat_detail->engins}}">
                </div>
                
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">frais</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="frais" value="{{$contrat_detail->frais}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">chauffeur_1</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="chauffeur_1"value="{{$contrat_detail->chauffeur_1}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">chauffeur_2</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="chauffeur_2"value="{{$contrat_detail->chauffeur_2}}">
                </div>   
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">chauffeur_3</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="chauffeur_3"value="{{$contrat_detail->chauffeur_3}}">
                </div> 

                <button type="submit" class="btn btn-primary">Mise a jour</button>
            </form>
        </div>
    </div>
</div>

@endsection