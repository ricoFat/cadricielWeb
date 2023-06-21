@extends('.layouts.app')
@section('title', 'Liste des articles')
@section('titleHeader', 'Article')
@section('content')
        <div class="row">
            <div class="col-8 ">
                <p>Cliquez sur un article pour lire </p>  
            </div>

            <div class="col-4">
                <p>Créez un nouvel article</p>
                <a  href="{{ route('forum.create') }}" class="btn btn-primary btn-sm">Ajouter</a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Liste des articles</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                       @forelse ($posts as $post)
                          <li> <a  href="{{ route('forum.show', $post->id)}} ">{{ $post->titre }}</a> </li>
                          
                        @empty 
                        <li class="text-danger">Aucun article trouvé</li>
                       @endforelse
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    


@endsection