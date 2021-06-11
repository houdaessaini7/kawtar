@extends('layouts.app')

@section('content')
<div class=" text-center p-3">
<h1>Gestion Engin</h1>
@if(Session::has('error'))
    <p class="alert alert-danger">{{ Session::get('error') }}</p>
@endif
@if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
@endif

    <div class="row justify-content-center">
        <div class="col-12">
            <a href="{{route('engin.add')}}" class="btn btn-info btn-block">Ajouter</a>
            <table class="table">
                <tr>
                    <td></td>
                    <td>Nom et prenom du fournisseur</td>
                    <td>Type d’engin </td>
                    <td>Modèle </td>
                    <td>Année</td>
                    <td>Nombre d’heures</td>
                    <td>Kilométrage</td>
                    <td>Consommation par Heure ou au 100 Km</td>
                    <td>Date dernier contrôle technique</td>
                    <td>Date prochain contrôle technique</td>
                    <td>Numéro Police Assurance</td>
                    <td>Compagnie</td>
                    <td>Date fin validité</td>
                    <td>Remarque</td>
                    <td>Documents associés</td>
                     
                    <td>action</td>
                </tr>
                @foreach ($enigns as $item)
                <tr>
                    <td></td>
                    <td>
                        @if ($item->fournisseur)
                         {{$item->fournisseur->nom_prenom}}
                        @else
                            y a pas de de fournisseur
                        @endif
                    </td>
                    <td>{{$item->type_engin}}</td>
                    <td>{{$item->modele}}</td>
                    <td>{{$item->annee}}</td>
                    <td>{{$item->nombre_heure}}</td>
                    <td>{{$item->kilometrage}}</td>
                    <td>{{$item->consommation_heure_100km}}</td>
                    <td>{{$item->date_dernier_controle}}</td>
                    <td>{{$item->date_prochain_controle}}</td>
                    <td>{{$item->numero_police_assurance}}</td>
                    <td>{{$item->compagnie}}</td>
                    <td>{{$item->date_fin_validite}}</td>
                    <td>{{$item->remarque}}</td>
                    <td>{{$item->documents_associes}}</td>
                    <td><a href="{{url('/engin/update/?id='.$item->id)}}" class="btn btn-success">modifier</a> <a href="{{url("engin/delete/?id=".$item->id)}}" class="btn btn-danger">supprimer</a></td>  
                </tr>  
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection