@extends('layouts.app')

@section('content')

    <h1>Update Post</h1>
    {!! Form::model($post,
                    ['method'=>'patch', 'action'=>['PostController@update', $post->id]]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}


    {!! Form::open(['method'=>'delete', 'action'=>['PostController@destroy', $post->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete Post', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

@endsection

