@extends('.layouts.app')
@section('title', config('app.name'))
@section('titleHeader', config('app.name'))
@section('content')
        <div class="row">
            <div class="col-12 text-center">
                <p>Visiter notre page de gestion des Étudiants</p>
                <a href="{{ route('etudiant.index')}}" class="btn btn-outline-primary">Afficher les étudiants</a>
            </div>
        </div>
    </div>
@endsection