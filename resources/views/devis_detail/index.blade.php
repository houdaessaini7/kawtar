<?php $engin = new App\Engin();?>

{{-- {{$ptva=0}}
{{$pht=0}}
{{$pttc=0}} --}}
@extends('layouts.app')

@section('content')
<div class=" text-center p-3">
<h1>Gestion DevisDetail</h1>
@if(Session::has('error'))
    <p class="alert alert-danger">{{ Session::get('error') }}</p>
@endif
@if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
@endif

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="">Date</span>
                            </div>
                            <input type="date" class="form-control" name="date"  value="<?php echo date('Y-m-d'); ?>">
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="">Date de fin de validite</span>
                            </div>
                            
                            <input type="date" class="form-control" name="date_fin_validite" value="<?php  ; echo date('Y-m-d', strtotime( ' + 15 days')); ?>">
                        </div>
                    </div>
                    @php
                        $pht=0;
                        $ptva=0;
                        $pttc=0;
                        foreach ($devis_detail->sortByDesc('id') as $item ) {
                            $pht+=$item->prix_unit*$item->qte;
                            $ptva+=($item->tva/100)*$item->prix_unit*$item->qte;
                            $pttc+=($item->prix_unit*$item->qte)*($item->tva/100+1)+(($item->reduction/100)*$item->prix_unit);     
                        }
                    @endphp
                    <div class="col-6">
                        <table class="table">
                            <tbody>
                            {{-- @foreach ($devis_detail->sortByDesc('id') as $item )     --}}
                              <tr>            
                                <th scope="row">Montant HT</th>
                                <td>{{$pht}} MAD</td>
                              </tr>
                              <tr>
                                <th scope="row">Montant TVA</th>
                                <td>{{$ptva}} MAD</td>
                              </tr>
                              <tr>
                                <th scope="row">Montant TTC</th>
                                <td>{{$pttc}} MAD</td>
                              </tr>
                            {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
                <table class="table" id="table" style="display:none;">
                    <tr>
                        <td>description</td>
                        <td>TVA</td>
                        <td>P.U.HT</td>
                        <td>Qte</td>
                        <td>Reduction</td>
                        <td>action</td>
                    </tr>
                    
                    @foreach ($devis_detail->sortByDesc('id') as $item )
                        <tr>
                            <td>
                            @if ($item->engin)
                                {{$item->engin->type_engin}}
                            @else
                                y a pas de de fournisseur
                            @endif
                            </td>
                            <td>
                                {{$item->tva}}
                            <td>
                                {{$item->prix_unit}}
                            </td>
                            <td>
                                {{$item->qte}}
                            </td>
                            <td>
                                {{$item->reduction}}
                            </td>
                            <td> <a href="{{url('/devis_detail/update/?id='.$item->id)}}" class="btn btn-success">modifier</a> <a href="{{url("devis_detail/delete/?id=".$item->id)}}" class="btn btn-danger">supprimer</a></td>  
                        </tr>  
                    @endforeach
                </table>
                <table class="table">
                    <tr>
                        <td>type Engin</td>
                        <td>TVA</td>
                        <td>P.U.HT</td>
                        <td>Qte</td>
                        <td>Reduction</td>
                         
                        <td>action</td>
                    </tr>
                    <tr>
                        <form action="{{route('devis_detail.add.data')}}?m={{Request::get('m')}}" method="post">
                                @csrf
                            <td>
                                <select  class="form-select"  name="engin">
                                    @foreach ($engin->getItems() as $item)
                                        <option value="{{$item->id}}">{{$item->type_engin}}</option>
                                    @endforeach
                                </select>     
                            </td>
                            <td>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="tva">
                                    <label for="">%</label>
                                </div>
                            </td>
                            <td>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="prix_unit">
                                </div>
                            </td>
                            <td>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="qte">
                                </div> 
                            </td>
                            <td>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="reduction">
                                    <label for="">%</label>
                                </div>
                            </td>
                            <td> <button type="submit" class="btn btn-primary" onclick="showtable1()">Ajouter</button></td>  
                        </form>
                    </tr>  
                    
                </table>
            </div>
            
        </div>
    </div>
</div>

@endsection
<script>
    function showtable1() {
    var x = document.getElementById("table");
    if (x.style.display === "none") 
    {
        x.style.display ="block";
    }else  
    x.style.display ="none";
    }
</script>
