{{-- @extends('layouts.app')
@section('title', 'Etudiant')
@section('titleHeader', 'Uploader fichier')
@section('content')

<form action="{{ route('upload') }} " method="POST" enctype="multipart/form-data" class="form-control">
    @csrf

    <div>
        <label for="file">Choisir un fichier:</label>
        <input type="file" name="file" id="file" accept=".pdf,.zip,.doc">
        @error('file')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <button type="submit"  class="btn btn-outline-success">Envoyer</button>
    </div>
</form>
@endsection --}}

@extends('layouts.app')
@section('title', 'Etudiant')
@section('titleHeader', 'Uploader fichier')
@section('content')

<form action="{{-- {{ route('upload') }} --}}" method="POST" enctype="multipart/form-data" class="form-control">
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
@endsection
