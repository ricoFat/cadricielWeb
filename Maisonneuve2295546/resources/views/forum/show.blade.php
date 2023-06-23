@extends('layouts.app')
@section('title', 'Article')
@section('titleHeader', 'Article')
@section('content')
        <div class="row mt-5">
            <div class="col-12">  
                <hr>
                <h2 class='display-6 mt-4' >
                    {{$forumPost->title}}
                </h2>
                <p>
                    {{ $forumPost->contenu }}
                </p>
                <p>
                    <strong>@lang('lang.text_auteur')  :</strong> {{ $forumPost->forumHasUser->name}}
                    <p>
                      <strong>@lang('lang.text_creation')  :</strong><span> @lang('lang.text_le') </span>
                      @if (app()->getLocale() === 'fr')
                          {{ strftime('%d-%m-%Y', strtotime($forumPost->date_creation)) }}
                      @elseif (app()->getLocale() === 'en')
                            {{ strftime('%B-%d-%Y', strtotime($forumPost->date_creation)) }}
                      @endif

                    </p>
                </p>
                <p>
              </p>
            </div>
            <hr>
        </div>

        <div class="row">
            <div class="col-4">
                <a href="{{ route('forum.index')}}" class="btn btn-primary btn sm mt-3">@lang('lang.text_retourner')</a>
                <a href="{{ route('forum.edit', $forumPost->id) }}" class="btn btn-secondary  mt-3">@lang('lang.text_modifier')</a>
                <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#modalDelete">
                  @lang('lang.text_effacer')
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
      Voulez-vous vraiment effacer l'article : {{ $forumPost->id}} ?
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