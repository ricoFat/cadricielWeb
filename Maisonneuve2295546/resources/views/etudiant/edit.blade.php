@extends('.layouts.app')
@section('title', 'Modifier un article')
@section('titleHeader', 'Modifier un étudiant')
@section('content')

<div class="row mt-4 justify-content-center">
    <div class="col-6">
        <div class="card">
            <form method="post">
                @csrf
                @method('put')
                <div class="card-header text-center">
                    <h4>Formulaire de modification</h4>
                </div>
                <div class="card-body">
                    <label for="nom" >Nom:</label>
                    <input type="text" name="nom" id="name" class="form-control" value="{{ old('nom',$etudiantInfo->nom) }}">
                    <label for="email" class="mt-3">Courriel:</label> 
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email',$etudiantInfo->email) }}">
                    <label for="email" class="mt-3" >Date de naissance:</label> 
                    <input type="date" name="date_de_naissance" id="date_de_naisssance" class="form-control" value="{{ old('date_de_naissance',$etudiantInfo->date_de_naissance) }}">
                    <label for="adresse"class="mt-3">Téléphone</label> 
                    <input type="phone" name="phone" id="phone" class="form-control" value="{{ old('phone',$etudiantInfo->phone) }}">
                    <label for="date" class="mt-3" >Adresse:</label> 
                    <input type="adresse" name="adresse" id="adresse" class="form-control" value="{{old('adresse',$etudiantInfo->adresse) }}">
                    <label for="adresse" class="mt-3">Ville</label> 
                    <select name="villes_id" id="ville" class="form-control">
                        @foreach($villes as $ville)
                            <option value="{{ $ville->id }}" {{ $etudiantInfo->villes_id == $ville->id ? 'selected' : '' }}>{{ $ville->nom }}</option>
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