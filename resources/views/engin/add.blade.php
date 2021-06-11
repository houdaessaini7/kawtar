<?php $fournisseur = new App\Fournisseur();?>


@extends('layouts.app')

@section('content')
<div class=" text-center">
<h1> Ajouter Engin</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{route('engin.add.data')}}" method="post">
                @csrf

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">nom de fournisseur	</span>
                    </div>
                    <select  class="form-select"  name="fournisseur">
                       @foreach ($fournisseur->getItems() as $item)
                            <option value="{{$item->id}}">{{$item->nom_prenom}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Type engin	</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="type_engin">
                    @error('type_engin')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Modèle</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="modele">
                    @error('modele')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Annee</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="annee">
                    @error('annee')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Nombre heure</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="nombre_heure">
                    @error('nombre_heure')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">kilometrage</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="kilometrage">
                    @error('kilometrage')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Consommation heure 100km</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="consommation_heure_100km">
                    @error('consommation_heure_100km')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Numero de police</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="numero_police_assurance">
                    @error('numero_police_assurance')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Date prochain controle</span>
                    </div>
                    <input type="date" aria-label="First name" class="form-control" name="date_prochain_controle">
                    @error('date_prochain_controle')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Date de dernier controle</span>
                    </div>
                    <input type="date" aria-label="First name" class="form-control" name="date_dernier_controle">
                    @error('date_dernier_controle')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Compagnie</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="compagnie">
                    @error('compagnie')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Date de fin de validite</span>
                    </div>
                    <input type="date" aria-label="First name" class="form-control" name="date_fin_validite">
                    @error('date_fin_validite')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Remarque</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="remarque">
                    @error('remarque')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Documents associes</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="documents_associes">
                    @error('documents_associes')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>

@endsection