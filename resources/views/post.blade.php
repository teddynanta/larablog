@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <h4>By: <a href="/category/{{ $post->author }}">{{ $post->author }}</a> at <a href="/category/{{ $post->category }}">{{ $post->category }}</a> category.</h4>
        <p>{{ $post->content }}</p>
    </article>
    <a href="/">Back to home</a>
@endsection