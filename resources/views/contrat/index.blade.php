@extends('layouts.app')

@section('content')
<div class=" text-center p-3">
<h1>Gestion contrat</h1>
@if(Session::has('error'))
    <p class="alert alert-danger">{{ Session::get('error') }}</p>
@endif
@if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
@endif

    <div class="row justify-content-center">
        <div class="col-12">
            <a href="{{route('contrat.add')}}" class="btn btn-info btn-block">Ajouter</a>
            <table class="table">
                <tr>
                    <td></td>
                    <td>Statut du contrat</td>
                    <td>Lieux de mobilisation</td> 
                    <td>Description sommaire du travail</td>
                    <td>Date de début</td>
                    <td>Date dernière facture</td>
                    <td>Durée en HJSMA</td>
                    <td>Durée quotidienne de travail</td>
                    <td>Durée pause</td>
                    <td>Durée Hebdomadaire de travail</td>
                    <td>carburant</td>
                    <td>exonere</td>
                    <td>type</td>
                     
                    <td>action</td>
                </tr>
                @foreach ($contrats as $item)
                <tr>
                    <td></td>
                    <td>{{$item->statut_client}}</td>
                    <td>{{$item->Lieux_mobilisation}}</td>
                    <td>{{$item->description_sommaire_travail}}</td>
                    <td>{{$item->date_debut}}</td>
                    <td>{{$item->date_derniere_facture}}</td>
                    <td>{{$item->duree_HJSMA}}</td>
                    <td>{{$item->duree_quotidienne_travail}}</td>
                    <td>{{$item->duree_pause}}</td>
                    <td>{{$item->duree_hebdomadaire_travail}}</td>
                    <td>{{$item->carburant}}</td>
                    <td>{{$item->exonere}}</td>
                    <td>{{$item->type}}</td>
                    <td><a href="{{url('/contrat/update/?id='.$item->id)}}" class="btn btn-success">modifier</a> <a href="{{url("contrat/delete/?id=".$item->id)}}" class="btn btn-danger">supprimer</a></td>
                
                </tr>  
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection