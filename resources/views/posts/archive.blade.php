@extends('layouts.base')

@section('content')

<link rel="stylesheet" href="css/archive.css">

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
        <section class="jumbotron text-center">
                <div class="container">
                  <h1 class="jumbotron-heading">Archive</h1>
                  <p class="lead text-muted">This is the archive of our blog posts</p>
                  <p>
                    <a href="/posts/create" class="btn btn-primary my-2">Create</a>
                  </p>
                </div>
        </section>
       
        <div class="container-fluid">
            <div class="card-column">
                @if(count($posts) > 0)
                @foreach($posts as $post)
                <div class="card box-shadow mb-5">
                    {{--  <img class="card-img-top" src="img/pic2.jpg" alt="Card image cap">  --}}
                    <div class="card-body">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}<a></h3>
                        <p class="card-text">{!!$post->body!!}</p>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between align-items-center">   
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">Created on: {{$post->created_at}}</small>
                        </div>
                </div>
            </div>
                
                @endforeach
                {{$posts->links()}}
                @else
                <p>No Posts Found</p>
            @endif
        </div>
    </div>
    </div>
</div>
@endsection