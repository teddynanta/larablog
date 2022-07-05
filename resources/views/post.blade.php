@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <h4>By: {{ $post->user->name }} at <a href="/categories/{{ $post->category->slug }}">{{ $post->category->category }}</a> category.</h4>
        {!! $post->content !!}
    </article>
    <a href="/">Back to home</a>
@endsection