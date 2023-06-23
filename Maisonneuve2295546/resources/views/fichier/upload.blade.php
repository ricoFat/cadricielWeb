{{-- @extends('layouts.app')
@section('title', 'Etudiant')
@section('titleHeader', 'Uploader fichier')
@section('content')

<form method="POST" enctype="multipart/form-data" class="form-control">
    @csrf

    <div class="form-group">
        <label for="file">Choisir un fichier:</label>
        <input type="file" name="file" id="file" accept=".pdf,.zip,.doc" class="form-control-file">
        @error('file')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-outline-success">Envoyer</button>
    </div>
</form>
@endsection --}}

@extends('layouts.app')
@section('title', 'Etudiant')
@section('titleHeader', __('Uploader fichier'))
@section('content')

<form method="POST" enctype="multipart/form-data" class="form-control">
    @csrf

    <div class="form-group">
        <label for="title_fr">{{ __('Titre') }}:</label>
        <input type="text" name="titre" id="titre" class="form-control" value="{{ old('titre_fr') }}">
        @error('title_fr')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="title_en">{{ __('Title') }}:</label>
        <input type="text" name="title_en" id="title_en" class="form-control" value="{{ old('title_en') }}">
        @error('title_en')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="date_creation">{{ __('Date de création') }}:</label>
        <input type="date" name="date_creation" id="date_creation" class="form-control" value="{{ old('date_creation') }}">
        @error('date_creation')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="file">{{ __('Choisir un fichier') }}:</label>
        <input type="file" name="file" id="file" accept=".pdf,.zip,.doc" class="form-control-file">
        @error('file')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-outline-success">{{ __('Envoyer') }}</button>
    </div>
</form>
@endsection
