@extends('layouts.base')

@section('content')

        <div class="flex-center position-ref full-height">
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
@endsection
