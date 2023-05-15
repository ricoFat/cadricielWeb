@extends('.layouts.app')
@section('title', 'Modifier un article')
@section('titleHeader', 'Modifier un article')
@section('content')

<div class="row mt4 justify-content-center">
    <div class="col-6">
        <div class="card">
            <form method="post">
                @csrf
                <div class="card-header">
                    Formulaire
                </div>
                <div class="card-body">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $blogPost->title }}">
                    <label for="article"></label> 
                    <textarea name="body" id="article" class="form-control">{{ $blogPost->body }}</textarea>
                </div>
                <div class="card-footer text-center">
                    <input type="submit" class="btn btn-success" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection