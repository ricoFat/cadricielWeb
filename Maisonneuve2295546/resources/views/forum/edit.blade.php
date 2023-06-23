@extends('.layouts.app')
@section('title', 'Modifier un article')
@section('titleHeader', 'Modifier un article')
@section('content')

<div class="row mt4 justify-content-center">
    <div class="col-6">
        <div class="card">
            <form method="post">
                @csrf
                @method('put')
                <div class="card-header">
                    Formulaire
                </div>
                <div class="card-body">
                    <label for="title">Title</label>
                    <input type="text" name="titre" id="titre" class="form-control" value="{{ $forumPost->titre }}">
                    <label for="article"></label> 
                    <textarea name="contenu" id="article" class="form-control">{{ $forumPost->contenu }}</textarea>
                </div>
                <div class="card-footer text-center">
                    @if(auth()->user() && $forumPost->etudiant_id == auth()->user()->id)
                    <input type="submit" class="btn btn-success" value="@lang('lang.text_save')">
                    <a href="{{ route('forum.show', $forumPost->id) }}" class="btn btn-secondary  mt-3">@lang('lang.text_annuler')</a>
                    <button type="button" class="btn btn-danger mt-3" data-toggle="modal" data-target="#deleteModal">@lang('lang.text_delete')</button>
                @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

