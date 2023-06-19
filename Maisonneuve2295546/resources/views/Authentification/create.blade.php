@extends('layouts.app')
@section('title', trans('lang.text_registration'))
@section('titleHeader', trans('lang.text_registration'))
@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <form method="post">
                @csrf
                <div class="card-body">
                    <input type="email" class="form-control mt-3" name="email" placeholder="Courriel" value="{{old('email')}}"> @if($errors->has('email'))
                    <div class="text-danger mt-2">
                        {{$errors->first('email')}}
                    </div>
                @endif

                    <input type="text" class="form-control mt-3" name="name" placeholder="Nom" value="{{old('name')}}">
                    @if($errors->has('name'))
                        <div class="text-danger mt-2">
                            {{$errors->first('name')}}
                        </div>
                    @endif
                    <input type="date" class="form-control mt-3" name="date_de_naissance" placeholder="Date de naissance">
                    <input type="text" class="form-control mt-3" name="phone" placeholder="Téléphone">
                    <input type="text" class="form-control mt-3" name="adresse" placeholder="Adresse">
                    <label for="adresse" class="mt-3">Ville</label>
                    <select name="villes_id" id="ville" class="form-control ">
                        @foreach($villes as $ville)
                            <option value="{{ $ville->id }}" >{{ $ville->nom }}</option>
                        @endforeach
                    </select>
                    <input type="password" class="form-control mt-3" name="password" placeholder="Password">
                    @if($errors->has('password'))
                        <div class="text-danger mt-2">
                            {{$errors->first('password')}}
                        </div>
                    @endif
                </div>
                <div class="card-footer d-grid mx-auto">
                    <input type="submit" value="Enregistrer" class="btn btn-outline-success btn-block">
                </div>
                
                </form>
            </div>
        </div>
    </div>
@endsection