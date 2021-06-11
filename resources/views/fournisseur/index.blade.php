@extends('layouts.app')

@section('content')
<div class=" text-center p-3">
<h1>Gestion Fournisseur</h1>
@if(Session::has('error'))
    <p class="alert alert-danger">{{ Session::get('error') }}</p>
@endif
@if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
@endif

    <div class="row justify-content-center">
        <div class="col-12">
            <a href="{{route('fournisseur.add')}}" class="btn btn-info btn-block">Ajouter</a>
            <table class="table">
                <tr>
                    <td></td>
                    <td>Nom prenom</td>
                    <td>Adresse</td>
                    <td>Téléphone fixe</td>
                    <td>Site web</td>
                    <td>Mail</td>
                    <td>ninea</td>
                    <td>rc</td>
                    <td>nom de contrat</td>
                    <td>fonction</td>
                    <td>numero cin</td>
                    <td>Téléphone 1</td>
                    <td>Téléphone 2</td>
                    <td>Téléphone 3</td>
                    <td>Type de fournisseur</td>
                    <td>Remarque</td>
                    <td>Documents associes</td>
                     
                    <td>action</td>
                </tr>
                @foreach ($fournisseurs as $item)
                <tr>
                    <td></td>
                    <td>{{$item->nom_prenom}}</td>
                    <td>{{$item->adresse}}</td>
                    <td>{{$item->tel_fixe}}</td>
                    <td>{{$item->site_web}}</td>
                    <td>{{$item->mail}}</td>
                    <td>{{$item->ninea}}</td>
                    <td>{{$item->rc}}</td>
                    <td>{{$item->nom_contrat}}</td>
                    <td>{{$item->fonction}}</td>
                    <td>{{$item->numero_cin}}</td>
                    <td>{{$item->telephone_1}}</td>
                    <td>{{$item->telephone_2}}</td>
                    <td>{{$item->telephone_3}}</td>
                    <td>{{$item->type_de_fournisseur}}</td>
                    <td>{{$item->remarque}}</td>
                    <td>{{$item->documents_associes}}</td>
                    <td><a href="{{url('/fournisseur/update/?id='.$item->id)}}" class="btn btn-success">modifier</a> <a href="{{url("fournisseur/delete/?id=".$item->id)}}" class="btn btn-danger">supprimer</a></td>
                
                </tr>  
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection