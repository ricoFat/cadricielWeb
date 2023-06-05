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
                    <input type="text" class="form-control mt-3" name="name" placeholder="Name" value="{{old('name')}}">
                    @if($errors->has('name'))
                        <div class="text-danger mt-2">
                            {{$errors->first('name')}}
                        </div>
                    @endif
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
                    <input type="submit" value="Save" class="btn btn-dark btn-block">
                </div>
                
                </form>
            </div>
        </div>
    </div>
@endsection