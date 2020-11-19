@extends('layout/main')
@section('title', 'xD')

@section('content')
    <h1>{{$post->title}}</h1>
    <p>Description: {{$post->description}}</p>
@endsection





