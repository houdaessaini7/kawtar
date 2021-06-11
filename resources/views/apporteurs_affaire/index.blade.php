@extends('layouts.app')

@section('content')
<div class=" text-center p-3">
<h1>Gestion Apporteurs D'Affaires</h1>
@if(Session::has('error'))
    <p class="alert alert-danger">{{ Session::get('error') }}</p>
@endif
@if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
@endif

    <div class="row justify-content-center">
        <div class="col-12">
            <a href="{{route('apporteurs_affaire.add')}}" class="btn btn-info btn-block">Ajouter</a>
            <table class="table">
                <tr>
                    <td></td>
                    <td>raison_sociale</td>
                    <td>Adresse</td>
                    <td>Site web</td>
                    <td>tel fixe</td>
                    <td>Mail</td>
                    <td>ninea</td>
                    <td>rc</td>
                    <td>nom de contrat</td>
                    <td>fonction</td>
                    <td>numero cin</td>
                    <td>Téléphone 1</td>
                    <td>Téléphone 2</td>
                    <td>Téléphone 3</td>
                    <td>mode_reglement</td>
                    <td>Type d’apporteur d’affaire</td>
                    <td>Remarque</td>
                    <td>Document associés</td>
                     
                    <td>action</td>
                </tr>
                @foreach ($apporteurs_affaire as $item)
                <tr>
                    <td></td>
                    <td>{{$item->raison_sociale}}</td>
                    <td>{{$item->adresse}}</td>
                    <td>{{$item->site_web}}</td>
                    <td>{{$item->tel_fixe}}</td>
                    <td>{{$item->mail}}</td>
                    <td>{{$item->ninea}}</td>
                    <td>{{$item->rc}}</td>
                    <td>{{$item->nom_contrat}}</td>
                    <td>{{$item->fonction}}</td>
                    <td>{{$item->numero_cin_passeport}}</td>
                    <td>{{$item->tel_1}}</td>
                    <td>{{$item->tel_2}}</td>
                    <td>{{$item->tel_3}}</td>
                    <td>{{$item->mode_reglement}}</td>
                    <td>{{$item->type_apporteur_affaire}}</td>
                    <td>{{$item->remarque}}</td>
                    <td>{{$item->document_associes}}</td>
                    <td><a href="{{url('/apporteurs_affaire/update/?id='.$item->id)}}" class="btn btn-success">modifier</a> <a href="{{url("apporteurs_affaire/delete/?id=".$item->id)}}" class="btn btn-danger">supprimer</a></td>
                
                </tr>  
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection