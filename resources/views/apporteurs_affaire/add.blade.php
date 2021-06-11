@extends('layouts.app')

@section('content')
<div class=" text-center">
<h1>    Ajouter apporteurs d'affaires</h1>

    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{route('apporteurs_affaire.add.data')}}" method="post">
                @csrf
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">raison_sociale</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="raison_sociale">
                </div>
                
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Adresse</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="adresse">
                </div>
                
                
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">site web</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="site_web">
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone fixe</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="tel_fixe">
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">mail</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="mail">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">ninea</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="ninea">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">rc</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="rc">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">nom de contrat</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="nom_contrat">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">fonction</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="fonction">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">numero cin</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="numero_cin_passeport">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone 1</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="tel_1">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone 2</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="tel_2">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone 3</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="tel_3">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">mode_reglement</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="mode_reglement">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Type de apporteur_affaire</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="type_apporteur_affaire">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Remarque</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="remarque">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Documents associes</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="document_associes">
                </div>
                

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>

@endsection