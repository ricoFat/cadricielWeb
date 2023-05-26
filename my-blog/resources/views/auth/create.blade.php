@extends('layouts.app')
@section('title', 'Registration')
@section('titleHeader', 'Registration')
@section('content')

    <div class="row justify-content-center">
        <div class="col-6">
            <form method="post">
                @csrf
                <div class="card-body">
                    <input type="text" class="form-control mt-3" name="name" placeholder="Name">
                    <input type="email" class="form-control mt-3 " name="email" placeholder="email">
                    <input type="password" class="form-control mt-3 " name="password" placeholder="Password">
                </div>
                <div class="card-footer d-grid mx-auto">
                    <input type="submit" value="Sauvergarder" class="btn btn-dark">
                </div>
            </form>
        </div>

    </div>

@endsection