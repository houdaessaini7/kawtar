@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Gestion client</h1>
    @if(Session::has('error'))
        <p class="alert alert-danger">{{ Session::get('error') }}</p>
    @endif
    @if(Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif
    <div class="row justify-content-center">
        <div class="col-12">
            <a href="{{route('client.add')}}" class="btn btn-info btn-block">Ajouter</a>
            <div class="table-responsive-sm">
            <table class="table table-resposive">
                <tr>
                    <td></td>
                    <td>Raison sociale</td>
                    <td>Adresse</td>
                    <td>Site web</td>
                    <td>Tel fixe</td>
                    <td>mail</td>
                    <td>Numero de cin ou passeport</td>
                    <td>Téléphone 1</td>
                    <td>Téléphone 2</td>
                    <td>Téléphone 3</td>
                    <td>Mode de reglement</td>
                    <td>Remarque</td>
                    <td>Documents associes</td>
                    
                    <td>action</td>
                </tr>
                @foreach ($clients as $item)
                <tr>
                    <td></td>
                    <td>{{$item->raison_sociale}}</td>
                    <td>{{$item->adresse}}</td>
                    <td>{{$item->site_web}}</td>
                    <td>{{$item->tel_fixe}}</td>
                    <td>{{$item->mail}}</td>
                    <td>{{$item->numero_cin_passeport}}</td>
                    <td>{{$item->tel_1}}</td>
                    <td>{{$item->tel_2}}</td>
                    <td>{{$item->tel_3}}</td>
                    <td>{{$item->mode_reglement}}</td>
                    <td>{{$item->remarque}}</td>
                    <td>{{$item->documents_associes}}</td>
                    <td><a href="{{url('/client/update/?id='.$item->id)}}" class="btn btn-success">modifier</a> <a href="{{url("client/delete/?id=".$item->id)}}" class="btn btn-danger">supprimer</a></td>
                
                </tr>  
                @endforeach
            </table>
            </div>
        </div>
    </div>
</div>
@endsection