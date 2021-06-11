<?php $client = new App\Client();?>

@extends('layouts.app')
@section('content')

<div class=" text-center">
<h1> Ajouter Devis</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{route('devi.add.data')}}" method="post">
                @csrf
       
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">id_soc	</span>
                    </div>
                    <select  class="form-select"  name="client">
                       @foreach ($client->getItems() as $item)
                            <option value="{{$item->id}}">{{$item->raison_sociale}}</option>
                        @endforeach
                    </select> 
                   
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">date</span>
                    </div>
                    <input type="date" aria-label="First name" class="form-control" name="date">
                    @error('date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">valide_a_date</span>
                    </div>
                    <input type="date" aria-label="First name" class="form-control" name="valide_a_date">
                    @error('valide_a_date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">total_ht</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="total_ht">
                    @error('total_ht')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">total_tva</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="total_tva">
                    @error('total_tva')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">total_ttc</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="total_ttc">
                    @error('total_ttc')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">status</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="status">
                    @error('status')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Ajouter</button>
                
            </form>
        </div>
    </div>
</div>

@endsection
