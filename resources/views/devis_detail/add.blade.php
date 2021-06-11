<?php $devi = new App\Devi();?>
<?php $engin = new App\Engin();?>

@extends('layouts.app')
@section('content')

<div class=" text-center">
<h1> Ajouter DevisDetail</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{route('devis_detail.add.data')}}" method="post">
                @csrf
       
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">devis_id</span>
                    </div>
                    <select  class="form-select"  name="devi">
                       @foreach ($devi->getItems() as $item)
                            <option value="{{$item->id}}">{{$item->date}}</option>
                        @endforeach
                    </select>         
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">engins_id</span>
                    </div>
                    <select  class="form-select"  name="engin">
                       @foreach ($engin->getItems() as $item)
                            <option value="{{$item->id}}">{{$item->type_engin}}</option>
                        @endforeach
                    </select> 
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">type_engin</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="type_engin">
                    @error('type_engin')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">annee</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="annee">
                    @error('annee')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">nombre_heure</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="nombre_heure">
                    @error('nombre_heure')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">prix_unit</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="prix_unit">
                    @error('prix_unit')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">tva</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="tva">
                    @error('tva')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">qte</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="qte">
                    @error('qte')
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

                
                <button type="submit" class="btn btn-primary">Ajouter</button>
                
            </form>
        </div>
    </div>
</div>

@endsection
