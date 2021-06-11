@extends('layouts.app')

@section('content')
<div class=" text-center">
<h1>Ajouter contrat</h1>

    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{route('contrat.add.data')}}" method="post">
                @csrf
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Statut du contrat</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="statut_client">
                </div>
                
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Lieux de mobilisation</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="Lieux_mobilisation">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Description sommaire du travail</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="description_sommaire_travail">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Date de début</span>
                    </div>
                    <input type="date" aria-label="First name" class="form-control" name="date_debut">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Date dernière facture</span>
                    </div>
                    <input type="date" aria-label="First name" class="form-control" name="date_derniere_facture">
                </div>
                
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Durée en HJSMA</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="duree_HJSMA">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Durée quotidienne de travail</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="duree_quotidienne_travail">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Durée pause</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="duree_pause">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Durée Hebdomadaire de travail</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="duree_hebdomadaire_travail">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Carburant</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="carburant">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Exonere</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="exonere">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">type</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="type">
                </div>
                

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>

@endsection