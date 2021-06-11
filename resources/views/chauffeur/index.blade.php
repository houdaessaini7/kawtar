@extends('layouts.app')

@section('content')
<div class=" text-center p-3">
<h1>Gestion chauffeur</h1>
@if(Session::has('error'))
    <p class="alert alert-danger">{{ Session::get('error') }}</p>
@endif
@if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
@endif

    <div class="row justify-content-center">
        <div class="col-12">
            <a href="{{route('chauffeur.add')}}" class="btn btn-info btn-block">Ajouter</a>
            <table class="table">
                <tr>
                    <td></td>
                    <td>Nom prenom</td>
                    <td>Adresse</td> 
                    <td>Téléphone 1</td>
                    <td>Téléphone 2</td>
                    <td>Téléphone 3</td>
                    <td>Date de naissance</td>
                    <td>Numéro CNI ou PASSEPORT</td>
                    <td>Numéro de permis</td>
                    <td>Type de permis</td>
                    <td>Date dernière visite médicale</td>
                    <td>Date prochaine visite médicale</td>
                    <td>Remarque</td>
                    <td>Documents associés</td>
                     
                    <td>action</td>
                </tr>
                @foreach ($chauffeurs as $item)
                <tr>
                    <td></td>
                    <td>{{$item->nom_prenom}}</td>
                    <td>{{$item->adresse}}</td>
                    <td>{{$item->tel_1}}</td>
                    <td>{{$item->tel_2}}</td>
                    <td>{{$item->tel_3}}</td>
                    <td>{{$item->date_naissance}}</td>
                    <td>{{$item->numero_cin_passeport}}</td>
                    <td>{{$item->numero_permis}}</td>
                    <td>{{$item->type_permis}}</td>
                    <td>{{$item->date_derniere_visite_medicale}}</td>
                    <td>{{$item->date_prochaine_visite_medicale}}</td>
                    <td>{{$item->remarque}}</td>
                    <td>{{$item->documents_associes}}</td>
                    <td><a href="{{url('/chauffeur/update/?id='.$item->id)}}" class="btn btn-success">modifier</a> <a href="{{url("chauffeur/delete/?id=".$item->id)}}" class="btn btn-danger">supprimer</a></td>
                
                </tr>  
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection