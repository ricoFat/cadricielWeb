@extends('.layouts.app')
@section('title', trans('lang.text_liste_etudiant'))
@section('titleHeader', trans('lang.text_etudiant'))
@section('content')
        <div class="row">
            <div class="col text-center" >
                <p>@lang('lang.text_detail_etudiant') </p>      
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>@lang('lang.text_liste_etudiant')</h4>
                    </div>
                    <div class="card-body">
                    <ul class="list-inline">
                        @forelse ($etudiants as $etudiant)
                            <li> 
                                <a href="{{ route('etudiant.show', $etudiant->id)}}" class="text-decoration-none">{{ $etudiant->name }}</a>
                            <li>  
                        @empty 
                        <li class="text-danger">Aucun etuduant trouvé</li>
                       @endforelse
                    </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection