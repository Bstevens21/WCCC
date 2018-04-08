@extends('layouts.base')

@section('content')

{{-- <div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            
        </div>
        <a href="/about/create" class="btn btn-primary my-2">Create</a>
    </div>
    @if(count($boardMembers) > 0)
        @foreach($boardMembers as $boardMember)
            <div class="well">
                <h3>{{$boardMember->name}}</h3>
                <h5>{!!$boardMember->description!!}
                <a href="/about/{{$boardMember->id}}/edit" class="btn btn-info">Edit</a>
                {!!Form::open(['action' => ['BoardMembersController@destroy', $boardMember->id], 'method' => 'POST',])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            </div>
        @endforeach
    @else
            <p>No Members Found</p>
    @endif
</div>
@endsection --}}

<link rel="stylesheet" href="css/about.css">

<title>About Us</title>

<!-- Header with Background Image -->
<header class="wccc-header">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <h1 class="display-3 text-center text-white mt-4">Preserving Access to Western Colorado</h1>
        </div>
    </div>
    </div>
</header>

<!-- Page Content -->
<div class="container">

    <div class="row">
    <div class="col-sm-8">
        <h2 class="mt-4">What We Do</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
        <p>
        <a class="btn btn-primary btn-lg" href="#">Call to Action &raquo;</a>
        </p>
    </div>
    <div class="col-sm-4">
        <h2 class="mt-4">Contact Us</h2>
        <address>
        <strong>WCCC</strong>
        <br>261 East 200 South
        <br>Moab, Utah 84532
        <br>western_co_climbers@hotmail.com
        </address>
    </div>
    </div>
    <a href="/about/create" class="btn btn-primary my-2">Create</a>
    <!-- /.row -->
    <div class="row">
        @if(count($boardMembers) > 0)
        @foreach($boardMembers as $boardMember)
        <div class="col-sm-4 my-4">
        <div class="card">
            <img class="card-img-top" src="img/user1.jpg" alt="">
        <div class="card-body">
            <h2 class="card-title">{{$boardMember->name}}</h2>
            <p class="card-text">{!!$boardMember->description!!}</p>
        </div>        
    </div>
</div>
    @endforeach
@else
<p>No Members Found</p>
@endif
</div>
    </div>
    <!-- /.row -->
<!-- /.container -->

@endsection