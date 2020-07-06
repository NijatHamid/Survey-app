@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-heading">
                <div class="panel-heading"><h3>Dashboard</h3></div>

                <div class="panel-body">

                    <a href="/posts/create" class="btn btn-outline-secondary">Create Post</a>
                    <p></p>
                    <h3>YOUR Blog Posts</h3>
                    @if(count($posts)>0)
                        <table class="table table-bordered">
                            <tr>
                                <th>Title</th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}} </td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a></td>
                                    <td>
                                        {!! Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'float-right']) !!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no post</p>
                    @endif
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
