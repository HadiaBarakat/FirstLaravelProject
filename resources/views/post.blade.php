@extends('layouts.app')

@section('content')
    <h1>Post</h1>
    <script>alert('Hello World')</script>

    @if(count($people))

        <ul>

        @foreach($people as $person)
            <li>{{$person}}</li>
        @endforeach

        </ul>
    @endif

@endsection

