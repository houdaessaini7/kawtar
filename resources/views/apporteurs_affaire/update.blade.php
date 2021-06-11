@extends('layouts.app')

@section('content')
<div class=" text-center">
<h1>    mise a jour  : </h1>    

    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{route('apporteurs_affaire.update.data')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$apporteurs_affaire->id}}">
                
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Raison sociale</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="raison_sociale"value="{{$apporteurs_affaire->raison_sociale}}">
                </div>
                
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Adresse</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="adresse"value="{{$apporteurs_affaire->adresse}}">
                </div>
                
                
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">site web</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="site_web"value="{{$apporteurs_affaire->site_web}}">
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone fixe</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="tel_fixe"value="{{$apporteurs_affaire->tel_fixe}}">
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">mail</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="mail"value="{{$apporteurs_affaire->mail}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">ninea</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="ninea"value="{{$apporteurs_affaire->ninea}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">rc</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="rc"value="{{$apporteurs_affaire->rc}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">nom de contrat</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="nom_contrat"value="{{$apporteurs_affaire->nom_contrat}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">fonction</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="fonction"value="{{$apporteurs_affaire->fonction}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">numero cin</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="numero_cin_passeport"value="{{$apporteurs_affaire->numero_cin_passeport}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone 1</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="tel_1"value="{{$apporteurs_affaire->tel_1}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone 2</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="tel_2"value="{{$apporteurs_affaire->tel_2}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone 3</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="tel_3"value="{{$apporteurs_affaire->tel_3}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Mode de règlement</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="mode_reglement"value="{{$apporteurs_affaire->mode_reglement}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Type d’apporteur d’affaire</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="type_apporteur_affaire"value="{{$apporteurs_affaire->type_apporteur_affaire}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Remarque</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="remarque"value="{{$apporteurs_affaire->remarque}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Document associés</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="document_associes"value="{{$apporteurs_affaire->document_associes}}">
                </div>
                
                <button type="submit" class="btn btn-primary">Mise a jour</button>
            </form>
        </div>
    </div>
</div>

@endsection