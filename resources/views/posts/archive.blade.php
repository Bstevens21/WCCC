@extends('layouts.base')

@section('content')

<link rel="stylesheet" href="css/archive.css">

<div class="flex-center position-ref full-height">
    <div class="content">
        <section class="jumbotron text-center">
                <div class="container">
                  <h1 class="jumbotron-heading">Archive</h1>
                  <p class="lead text-muted">This is the archive of our blog posts</p>
                  @if(!Auth::guest())
                    <p>
                        <a href="/posts/create" class="btn btn-primary my-2">Create</a>
                    </p>
                  @endif
                </div>
        </section>
       
        <div class="container-fluid">
            <div class="card-column">
                @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div class="card box-shadow mb-5">
                        <div class="container">
                        <div class="row">
                        @foreach(explode(',', $post->post_images) as $image)
                            <div class="text-center">
                                <img class="card-img-top post-img img-thumbnail" src="storage/post_images/{{$image}}" alt="Card image cap">
                            </div> 
                        @endforeach
                        </div>
                        </div>
                        <div class="card-body">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}<a></h3>
                            <p class="card-text">{!!$post->body!!}</p>
                    </div>
                
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">   
                            @if(!Auth::guest())
                                <div class="btn-group"> 
                                    <a class="btn btn-sm btn-outline-secondary" href="/posts/{{$post->id}}/edit">Edit</a>
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST',])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm btn-outline-secondary'])}}
                                    {!!Form::close()!!}
                                </div>
                            @endif
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