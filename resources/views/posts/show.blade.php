@extends('layouts.base')

@section('content')

        <div class="flex-center position-ref full-height">

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
            </div>
        </div>
@endsection