@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-secondary">GO BACK</a>
    <h1>{{$post -> title}}</h1>
    <div>
        {{$post->description}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
@endsection
