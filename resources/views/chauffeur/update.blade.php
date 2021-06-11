@extends('layouts.app')

@section('content')
<div class=" text-center">
<h1>    mise a jour de Chauffeur : {{$chauffeur->nom_prenom}}</h1>    

    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{route('chauffeur.update.data')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$chauffeur->id}}">

                
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Nom prenom</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="nom_prenom" value="{{$chauffeur->nom_prenom}}">
                </div>
                
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Adresse</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="adresse" value="{{$chauffeur->adresse}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone 1</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="tel_1" value="{{$chauffeur->tel_1}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone 2</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="tel_2" value="{{$chauffeur->tel_2}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone 3</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="tel_3"value="{{$chauffeur->tel_3}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Date naissance</span>
                    </div>
                    <input type="date" aria-label="First name" class="form-control" name="date_naissance"value="{{$chauffeur->date_naissance}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Numero de la Cin ou Passeport</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="numero_cin_passeport"value="{{$chauffeur->numero_cin_passeport}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Numero du permis</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="numero_permis"value="{{$chauffeur->numero_permis}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Type permis</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="type_permis"value="{{$chauffeur->type_permis}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Date de derniere visite medicale</span>
                    </div>
                    <input type="date" aria-label="First name" class="form-control" name="date_derniere_visite_medicale"value="{{$chauffeur->date_derniere_visite_medicale}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Date du prochaine visite medicale</span>
                    </div>
                    <input type="date" aria-label="First name" class="form-control" name="date_prochaine_visite_medicale"value="{{$chauffeur->date_prochaine_visite_medicale}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Remarque</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="remarque"value="{{$chauffeur->remarque}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Documents associés</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="documents_associes"value="{{$chauffeur->documents_associes}}">
                </div>
                
                <button type="submit" class="btn btn-primary">Mise a jour</button>
            </form>
        </div>
    </div>
</div>

@endsection