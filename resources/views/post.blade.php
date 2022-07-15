@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <h6>By: <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> at <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->category }}</a> category.</h6>
        {!! $post->content !!}
    </article>
    <a href="/" class="text-decoration-none">Back to home</a>
@endsection