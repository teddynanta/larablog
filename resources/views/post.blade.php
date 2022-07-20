@extends('layouts.main')

@section('container')
<div class="container mb-3">

    <h2>{{ $post->title }}</h2> 
    <h6>By: <a href="/?author={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> at <a href="/?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->category }}</a> category.</h6>
    
    <img src="https://picsum.photos/seed/{{ $post->category->slug }}/1200/400" class="img-fluid mt-3" alt="{{ $post->category->category }}">

    <article class="my-3">

        {!! $post->content !!}

    </article>

    <a href="/" class="btn btn-primary btn-sm text-decoration-none">Back to home</a>

</div>
@endsection