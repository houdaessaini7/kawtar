@extends('layouts.app')

@section('content')
<div class=" text-center">
<h1>    mise a jour client : {{$client->nom_prenom}}</h1>    

    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{route('client.update.data')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$client->id}}">

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Raison sociale</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="raison_sociale" value="{{$client->raison_sociale}}">
                </div>
                
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Adresse</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="adresse" value="{{$client->adresse}}">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Site web</span>
                  </div>
                  <input type="text" aria-label="First name" class="form-control" name="site_web" value="{{$client->site_web}}">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Téléphone fixe</span>
                  </div>
                  <input type="text" aria-label="First name" class="form-control" name="tel_fixe" value="{{$client->tel_fixe}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Mail</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="mail" value="{{$client->mail}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Numero de cin ou passeport</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="numero_cin_passeport" value="{{$client->numero_cin_passeport}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone 1</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="tel_1" value="{{$client->tel_1}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone 2</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="tel_2" value="{{$client->tel_2}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone 3</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="tel_3" value="{{$client->tel_3}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Mode de reglement</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="mode_reglement" value="{{$client->mode_reglement}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Remarque</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="remarque" value="{{$client->remarque}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Documents associes</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="documents_associes" value="{{$client->documents_associes}}">
                </div>
                <button type="submit" class="btn btn-primary">Mise a jour</button>
            </form>
        </div>
    </div>
</div>

@endsection