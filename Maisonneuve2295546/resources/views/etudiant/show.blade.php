@extends('layouts.app')
@section('title', 'Etudiant')
@section('titleHeader', 'Information de l\'étudiant')
@section('content')
        <div class="row mt-5">
            <div class="col-12">         
                <hr>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Courriel</th>
                        <th scope="col">Télephone</th>
                        <th scope="col">Date de Naissance</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Ville</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="table-info">
                        
                        <td>{{ $etudiantInfo->name }}</td>
                        <td>{{ $etudiantInfo->email}}</td>
                        <td>{{ $etudiantInfo->phone}}</td>
                        <td>{{ $etudiantInfo->date_de_naissance}}</td>
                        <td>{{ $etudiantInfo->adresse}}</td>
                        <td>{{ $etudiantInfo->etudiantHasVille->nom }}</td>
                      </tr>       
                  </table>
            </div>
            <hr>
        </div>

        <div class="row">
             <div class="col-4">
                <a href="{{ route('etudiant.index')}}" class="btn btn-outline-primary btn mt-3 me-3">Retourner</a>
                <a href="{{ route('etudiant.edit', $etudiantInfo->id)}}" class="btn btn-outline-success btn  mt-3 me-3">Modifier</a>
                <button type="button" class="btn btn-outline-danger mt-3" data-bs-toggle="modal" data-bs-target="#modalDelete">
                  Effacer
              </button>
          </div>
      </div>


      <!-- Modal -->
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Effacer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Voulez-vous vraiment effacer l'étudiant: {{ $etudiantInfo->id}} ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Effacer" class="btn btn-danger">
        </form>
      </div>
    </div>
  </div>
  </div>
@endsection