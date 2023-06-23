@extends('.layouts.app')
@section('title', 'Liste des articles')
@section('titleHeader', 'Articles')
@section('content')
        <div class="row">
            <div class="col-8 ">
                <p>@lang('lang.text_lire') </p>  
            </div>

            <div class="col-4">
                <p>@lang('lang.text_creer')</p>
                <a  href="{{ route('forum.create') }}" class="btn btn-primary btn-sm">@lang('lang.text_ajouter')</a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>@lang('lang.text_liste_article')</h4>
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