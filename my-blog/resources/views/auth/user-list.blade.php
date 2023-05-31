@extends('layouts.app')
@section('title', 'User-List')
@section('titleHeader', 'User-List')
@section('content')
<div class="card mt-3">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Author</th>
                    <th>Title</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id}}</td>
                        <td>{{ $user->name}}</td>
                        <td>
                            @foreach ($user->userHasPosts as $post)
                                 <p>{{ $post->title}}</p>
                            @endforeach

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users }}
    </div>
</div>
@endsection
