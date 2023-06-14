{{-- @extends('layouts.app')
@section('title', 'Login')
@section('titleHeader', 'Connexion')
@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <form action="{{route('login')}}" method="post">
                @csrf
                <div class="card-body">
                    <input type="email" class="form-control mt-3" name="email" placeholder="email" value="{{old('email')}}">
                    @if($errors->has('email'))
                        <div class="text-danger mt-2">
                            {{$errors->first('email')}}
                        </div>
                    @endif
                    <input type="password" class="form-control mt-3" name="password" placeholder="Password">
                    @if($errors->has('password'))
                        <div class="text-danger mt-2">
                            {{$errors->first('password')}}
                        </div>
                    @endif
            
                </div>
                <div class="card-footer d-grid mx-auto">
                    <input type="submit" value="Login" class="btn btn-dark btn-block">
                </div>
                
                </form>
            </div>
        </div>
    </div>
@endsection --}}

@extends('layouts.app')
@section('title', 'Login')
@section('titleHeader', 'Connexion')
@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Connexion</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
                            @if($errors->has('email'))
                                <div class="text-danger mt-2">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            @if($errors->has('password'))
                                <div class="text-danger mt-2">
                                    {{$errors->first('password')}}
                                </div>
                            @endif
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
