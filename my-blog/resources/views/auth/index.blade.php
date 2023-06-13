@extends('layouts.app')
@section('title', 'Login')
@section('titleHeader', trans('lang.text_login'))
@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <form action="{{route('login.authentication')}}" method="post">
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
                 {{--    <a href="{{ route('forgot.password') }}">Forgot Password</a> --}}
                </div>
                <div class="card-footer d-grid mx-auto">
                    <input type="submit" value="Login" class="btn btn-dark btn-block">
                </div>
                
                </form>
            </div>
        </div>
    </div>
@endsection