@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action'=>'PostsController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Survey')}}
            {{Form::text('title', '',['class' => 'form-control', 'placeholder' => 'Survey Adi'])}}
        </div>
    <div class="form-group">
        {{Form::label('description','Aciqlama')}}
        {{Form::textarea('description', '',['class' => 'form-control', 'placeholder' => 'Aciqlama'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
