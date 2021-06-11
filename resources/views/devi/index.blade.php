@extends('layouts.app')

@section('content')
<div class=" text-center p-3">
<h1>Gestion Devis</h1>
@if(Session::has('error'))
    <p class="alert alert-danger">{{ Session::get('error') }}</p>
@endif
@if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
@endif

    <div class="row justify-content-center">
        <div class="col-12">
            <a href="{{route('devi.add')}}" class="btn btn-info btn-block">Ajouter</a>
            <table class="table">
                <tr>
                    <td></td>
                    <td>id_soc</td>
                    <td>date</td>
                    <td>valide_a_date</td>
                    <td>total_ht</td>
                    <td>total_tva</td>
                    <td>total_ttc</td>
                    <td>status</td>
                    
                     
                    <td>action</td>
                </tr>
                @foreach ($devi as $item)
                <tr>
                    <td></td>
                    <td>
                        @if ($item->client)
                         {{$item->client->raison_sociale}}
                        @else 
                            y a pas de de client
                        @endif
                    </td>
                    <td>{{$item->date}}</td>
                    <td>{{$item->valide_a_date}}</td>
                    <td>{{$item->total_ht}}</td>
                    <td>{{$item->total_tva}}</td>
                    <td>{{$item->total_ttc}}</td>
                    <td>{{$item->status}}</td>
                    <td><a href="{{url('/devi/update/?id='.$item->id)}}" class="btn btn-success">modifier</a> <a href="{{url("devi/delete/?id=".$item->id)}}" class="btn btn-danger">supprimer</a></td>  
                </tr>  
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection