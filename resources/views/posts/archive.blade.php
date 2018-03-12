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
                    {{$page}}
                </div>
                <div>
                    <a href='/posts/create'>
                        <button type="button" class="btn btn-primary">Create Post</button>
                    </a>
                </div>
                <div>
                        @if(count($posts) > 0)
                        @foreach($posts as $post)
                            <div class="well">
                                <h3>{{$post->title}}</h3>
                                <p>{{$post->body}}</p>
                                <small>Created on: {{$post->created_at}}</small>
                            </div>
                        @endforeach
                        {{$posts->links()}}
                        @else
                        <p>No Posts Found</p>
                    @endif
                </div>
            </div>
        </div>
@endsection