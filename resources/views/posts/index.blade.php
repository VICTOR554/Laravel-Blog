@extends('layouts.app')


@section('title')Posts @endsection


@section('content')
            <p>The Posts of Dailly Beagul: </p>
            <ul>
                @foreach ($posts as $post)
                    <li><a href="{{route('posts.show', [ 'id' => $post->id ])}}">{{$post->title}}</a></li>
                @endforeach
            </ul>
@endsection
