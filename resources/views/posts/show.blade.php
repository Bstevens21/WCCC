@extends('layouts.base')

@section('content')

<link rel="stylesheet" href="css/show.css">

<div class="flex-center position-ref full-height">

    <div class="card box-shadow mb-5 post-card">
        <div class="card-header">
        <h1>{{$post->title}}</h1>
        </div>
            <div class="container">
            <div class="row">
                @foreach(explode(',', $post->post_images) as $image)
                        <img class="card-img-top post-img img-thumbnail" src="storage/post_images/{{$image}}" alt="Card image cap">
                @endforeach
            </div>
            </div>
        <div class="card-text">
                {!!$post->body!!}
        </div>
        <div class="card-footer">
        <small>Written on: {{$post->created_at}}</small>
        </div>
        <a href="/posts" class="btn btn-primary">View All Posts</a>
    </div>
</div>
@endsection