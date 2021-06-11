@extends('layouts.app')
@section('content')
<div class=" text-center p-3">
<h1>Gestion contrat detail</h1>
@if(Session::has('error'))
    <p class="alert alert-danger">{{ Session::get('error') }}</p>
@endif
@if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
@endif

    <div class="row justify-content-center">
        <div class="col-12">
            <a href="{{route('contrat_detail.add')}}" class="btn btn-info btn-block">Ajouter</a>
            <table class="table">
                <tr>
                    <td></td>
                    <td>statut_client</td>
                    <td>engins</td>
                    <td>frais</td>
                    <td>chauffeur_1</td>
                    <td>chauffeur_2</td>
                    <td>chauffeur_3</td>
                     
                    <td>action</td>
                </tr>
                @foreach ($contrat_details as $item)
                <tr>
                    <td></td>
                    <td>
                        @if ($item->contrat)
                         {{$item->contrat->statut_client}}
                        @else
                            y a pas de contrat
                        @endif
                    </td>
                    <td>{{$item->contrats_id}}</td>
                    <td>{{$item->engins}}</td>
                    <td>{{$item->frais}}</td>
                    <td>{{$item->chauffeur_1}}</td>
                    <td>{{$item->chauffeur_2}}</td>
                    <td>{{$item->chauffeur_3}}</td>
                    <td><a href="{{url('/contrat_detail/update/?id='.$item->id)}}" class="btn btn-success">modifier</a> <a href="{{url("contrat_detail/delete/?id=".$item->id)}}" class="btn btn-danger">supprimer</a></td>  
                </tr>  
                @endforeach
            </table>
        </div>
    </div>

</div>
@endsection