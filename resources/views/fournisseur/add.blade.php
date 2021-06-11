
@extends('layouts.app')


@section('content')
<div class=" text-center">
<h1>    Ajouter Fournisseur</h1>

    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{route('fournisseur.add.data')}}" method="post">
                @csrf
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Nom prenom</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="full_name">
                </div>
                
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Adresse</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="adress">
                </div>
                
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone fixe</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="phone">
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">site web</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="site_web">
                </div>
                
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">mail</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="mail">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">ninea</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="ninea">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">rc</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="rc">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">nom de contrat</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="nom_contrat">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">fonction</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="fonction">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">numero cin</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="numero_cin">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone 1</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="phone1">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone 2</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="phone2">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Téléphone 3</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="phone3">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Type de fournisseur</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="type_de_fournisseur">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Remarque</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="remarque">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Documents associes</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="documents_associes">
                </div>
                

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>

@endsection