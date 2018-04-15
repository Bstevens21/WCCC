@extends('layouts.base')

@section('content')

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            {{$page}}
        </div>
    {!! Form::open(['action' => 'EmailController@store', 'method' => 'POST']) !!}
      <div>
        {{Form::label('email', 'Email')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
      </div>
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
      @csrf
     {!! Form::close() !!}
    </div>
</div>

@endsection