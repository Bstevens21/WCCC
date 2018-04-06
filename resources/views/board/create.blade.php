@extends('layouts.base')

@section('content')

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                   
                </div>
                {!! Form::open(['action' => 'BoardMembersController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('name', 'Name')}}
                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
                    </div>
                    <div class="form-group">
                            {{Form::label('description', 'Description')}}
                            {{Form::textarea('description', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Description'])}}
                    </div>
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
        </div>
@endsection