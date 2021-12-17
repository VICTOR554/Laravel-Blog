@extends('layouts.app')


@section('title', 'Post Details')

@section('content')
            <ul>
                <li>Title: {{$post->title}}</li>
                <li>Weight: {{$post->description}}</li>
                <li>Views: {{$post->views ?? 'Unknown'}}</li>
                <li>User: {{$post->user->name}}</li>
            </ul>
@endsection
