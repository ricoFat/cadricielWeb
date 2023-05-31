@extends('.layouts.app')
@section('title', 'Ajout étudiant')
@section('titleHeader', 'Ajouter un étudiant')
@section('content')

<div class="row mt-4 justify-content-center">
    <div class="col-6">
        <div class="card">
            <form method="post">
                @csrf
                <div class="card-header text-center ">
                    Formulaire d'ajout d'un étudiant
                </div>
                <div class="card-body">
                    <label for="nom" class="mt-3">Nom:</label>
                    <input type="text" name="nom" id="name" class="form-control" >
                    <label for="email" class="mt-3" >Courriel:</label> 
                    <input type="email" name="email" id="email" class="form-control">
                    <label for="email" class="mt-3" >Date de naissance:</label> 
                    <input type="date" name="date_de_naissance" id="date_de_naissance" class="form-control" max="{{ date('2019-06-01') }}">
                    <label for="adresse" class="mt-3">Adresse:</label> 
                    <input type="adresse" name="adresse" id="adresse" class="form-control">
                    <label for="phone" class="mt-3">Téléphone:</label> 
                    <input type="phone" name="phone" id="phone" class="form-control">
                    <label for="phone" class="mt-3">Ville:</label>
                    <select name="villes_id" id="ville"  class="form-control mt-3">
                        @foreach ($villes as $ville)
                            <option value="{{ $ville->id}}"> {{ $ville->nom}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="card-footer text-center">
                    <input type="submit" class="btn btn-outline-success" value="Sauvergarder">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection