<?php $contrat = new App\Contrat();?>

@extends('layouts.app')

@section('content')
<div class=" text-center">
<h1>Ajouter contrat</h1>

    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{route('contrat_detail.add.data')}}" method="post">
                @csrf
                  
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">statut_client	</span>
                  </div>
                  <select  class="form-select"  name="contrat">
                      @foreach ($contrat->getItems() as $item)
                          <option value="{{$item->id}}">{{$item->statut_client}}</option>
                      @endforeach
                  </select>
              </div>       
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">engins</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="engins">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">frais</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="frais">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">chauffeur_1</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="chauffeur_1">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">chauffeur_2</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="chauffeur_2">
                </div>   
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">chauffeur_3</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="chauffeur_3">
                </div>
                
                <button type="submit" class="btn btn-primary">Ajouter</button>
  
            </form>
        </div>
    </div>
</div>

@endsection