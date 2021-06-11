@extends('layouts.app')

@section('content')
<div class=" text-center">
<h1>    mise a jour de devis du : {{$devi->date}}</h1>    

    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{route('devi.update.data')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$devi->id}}">

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">raison_sociale</span>
                    </div>
                    <select  class="form-select"  name="client">
                        @foreach (App\Client::all() as $item)
                            <option value="{{$item->id}}">{{$item->raison_sociale}}</option>
                        @endforeach
                        
                    </select>
                </div> 
                
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">date</span>
                    </div>
                    <input type="date" aria-label="First name" class="form-control" name="date" value="{{$devi->date}}">
                    @error('date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">valide_a_date</span>
                    </div>
                    <input type="date" aria-label="First name" class="form-control" name="valide_a_date"value="{{$devi->valide_a_date}}">
                    @error('valide_a_date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">total_ht</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="total_ht"value="{{$devi->total_ht}}">
                    @error('total_ht')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">total_tva</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="total_tva"value="{{$devi->total_tva}}">
                    @error('total_tva')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">total_ttc</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="total_ttc"value="{{$devi->total_ttc}}">
                    @error('total_ttc')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">status</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="status"value="{{$devi->status}}">
                    @error('status')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Mise a jour</button>
            </form>
        </div>
    </div>
</div>

@endsection