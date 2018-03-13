@extends('layouts.base')

@section('content')

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                <h1>{{$post->title}}</h1>
                </div>
                <a href="/posts" class="btn btn-primary">View All Posts</a>
                <div>
                     {!!$post->body!!}
                </div>
                <hr>
                <small>Written on: {{$post->created_at}}</small>
                <hr>
                <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>

                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST',])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            </div>
        </div>
@endsection