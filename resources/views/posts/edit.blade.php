@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action'=>['PostsController@update', $post->id],'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('title','Survey')}}
        {{Form::text('title', $post->title,['class' => 'form-control', 'placeholder' => 'Survey Adi'])}}
    </div>
    <div class="form-group">
        {{Form::label('description','Aciqlama')}}
        {{Form::textarea('description', $post->description,['id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Aciqlama'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
