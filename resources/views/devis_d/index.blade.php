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
        <div class="container">
            <div class="row">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">Date</span>
                    </div>
                    <input type="date" class="form-control">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">Date de fin de validite</span>
                    </div>
                    <input type="date" class="form-control">
                </div>
                <div class="col-6">
                    <table class="table">
                        <tbody>
                          <tr>
                            <th scope="row">Montant HT</th>
                            <td>0.00 MAD</td>
                          </tr>
                          <tr>
                            <th scope="row">Montant TVA</th>
                            <td>0.00 MAD</td>
                          </tr>
                          <tr>
                            <th scope="row">Montant TTC</th>
                            <td>0.00 MAD</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection