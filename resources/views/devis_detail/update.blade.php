@extends('layouts.app')

@section('content')
<div class=" text-center">
<h1>    mise a jour de devis detail du : {{$devis_detail->type_engin}}</h1>    

    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{route('devis_detail.update.data')}}?m={{Request::get('id')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$devis_detail->id}}">

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">engins_id</span>
                    </div>
                    <select  class="form-select"  name="engin">
                       @foreach (App\Engin::all() as $item)
                            <option value="{{$item->id}}">{{$item->type_engin}}</option>
                        @endforeach
                    </select> 
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">tva</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="tva"value="{{$devis_detail->tva}}">
                    @error('tva')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">prix_unit</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="prix_unit"value="{{$devis_detail->prix_unit}}">
                    @error('prix_unit')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">qte</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="qte"value="{{$devis_detail->qte}}">
                    @error('qte')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">reduction</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="reduction"value="{{$devis_detail->reduction}}">
                    @error('reduction')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Mise a jour</button>
            </form>
        </div>
    </div>
</div>

@endsection