@extends('layouts.base')

@section('content')

        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                <h1>{{$post->title}}</h1>
                </div>
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