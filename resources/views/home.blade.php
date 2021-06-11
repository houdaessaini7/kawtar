@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="{{route('client')}}">client</a></li>
                        <li class="list-group-item"><a href="{{route('fournisseur')}}">fournisseur</a></li>
                        <li class="list-group-item"><a href="{{route('contrat')}}">contrat</a></li>
                        <li class="list-group-item"><a href="{{route('contrat_detail')}}">contrat detail</a></li>
                        <li class="list-group-item"><a href="{{route('engin')}}">engin</a></li>
                        <li class="list-group-item"><a href="{{route('chauffeur')}}">chauffeur</a></li>
                        <li class="list-group-item"><a href="{{route('apporteurs_affaire')}}">apporteurs d'affaires</a></li>
                        <li class="list-group-item"><a href="{{route('devi')}}">devi*</a></li>
                        <li class="list-group-item"><a href="{{route('devis_detail')}}">devi detail*</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
