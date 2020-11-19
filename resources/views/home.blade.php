@extends('layout/main')
@section('title', 'Homepage')

@section('content')
    <h1>Posts</h1>
    @foreach ($posts as $post)
        <p>Title: {{$post->title}}</p>
        <p>Description: {{$post->description}}</p>
        <a href="/post/{{$post->slug}}">View</a>
    @endforeach
@endsection
