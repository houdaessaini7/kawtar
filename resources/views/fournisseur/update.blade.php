@extends('layouts.app')

@section('content')
<div class=" text-center">
<h1>    mise a jour de Fournisseur : {{$founisseur->nom_prenom}}</h1>    

    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{route('fournisseur.update.data')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$founisseur->id}}">

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Nom prenom</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="full_name" value="{{$founisseur->nom_prenom}}">
                </div>
                
              <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Adresse</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="adress" value="{{$founisseur->adresse}}">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Téléphone fixe</span>
                  </div>
                  <input type="text" aria-label="First name" class="form-control" name="phone" value="{{$founisseur->tel_fixe}}">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Site web</span>
                  </div>
                  <input type="text" aria-label="First name" class="form-control" name="site_web" value="{{$founisseur->site_web}}">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">mail</span>
                  </div>
                  <input type="text" aria-label="First name" class="form-control" name="mail" value="{{$founisseur->mail}}">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">ninea</span>
                  </div>
                  <input type="text" aria-label="First name" class="form-control" name="ninea" value="{{$founisseur->ninea}}">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">rc</span>
                  </div>
                  <input type="text" aria-label="First name" class="form-control" name="rc" value="{{$founisseur->rc}}">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Nom contrat</span>
                  </div>
                  <input type="text" aria-label="First name" class="form-control" name="nom_contrat" value="{{$founisseur->nom_contrat}}">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Fonction</span>
                  </div>
                  <input type="text" aria-label="First name" class="form-control" name="fonction" value="{{$founisseur->fonction}}">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Numero cin</span>
                  </div>
                  <input type="text" aria-label="First name" class="form-control" name="numero_cin" value="{{$founisseur->numero_cin}}">
                </div>
                
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone 1</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="phone1" value="{{$founisseur->telephone_1}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone 2</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="phone2" value="{{$founisseur->telephone_2}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone 3</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="phone3" value="{{$founisseur->telephone_3}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">type de fournisseur</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="type_de_fournisseur" value="{{$founisseur->type_de_fournisseur}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Remarque</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="remarque" value="{{$founisseur->remarque}}">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Documents associes</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="documents_associes" value="{{$founisseur->documents_associes}}">
                </div>
                
                <button type="submit" class="btn btn-primary">Mise a jour</button>
            </form>
        </div>
    </div>
</div>

@endsection