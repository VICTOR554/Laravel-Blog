@extends('layouts.app')

@section('title', 'Death Strikes')

@section('content')
    @if($post)
        <body>
         <p>New blogs with interesting {{$post ?? ''}}</p>
        </body>
    @else
     <h1> No Posts!!</h1>
    @endif

@endsection



