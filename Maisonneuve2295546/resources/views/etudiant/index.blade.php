@extends('.layouts.app')
@section('title', 'Liste des etuduiants')
@section('titleHeader', 'Étudiants')
@section('content')
        <div class="row">
            <div class="col-8 ">
                <p>Cliquez sur le nom pour les details </p>  
               
            </div>

            <div class="col-4">
                <p>Créez un nouvel etudiant</p>
                <a href="{{ route('etudiant.create') }}" class="btn btn-outline-primary btn-sm">Ajouter</a>
             
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Liste des étudiants</h4>
                    </div>
                    <div class="card-body">
                    <ul class="list-inline">
                        @forelse ($etudiants as $etudiant)
                          <li> <a href="{{ route('etudiant.show', $etudiant->id)}}" class="text-decoration-none">{{ $etudiant->nom }}</a> </li>
                          
                        @empty 
                        <li class="text-danger">Aucun etuduant trouvé</li>
                       @endforelse
                    </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection