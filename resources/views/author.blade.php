@extends('layouts.main')

@section('container')
<h1>Post by : {{ $title }}</h1>

@foreach ($posts as $post)
    <article>
        <h2 class="mt-5"><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
        <h6>By: <a href="/authors/{{ $post->user->id }}" class="text-decoration-none">{{ $post->user->name }}</a> at <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->category }}</a> category.</h6>
        <p>{{ $post->excerpt }} <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read more...</a></p>
    </article>
@endforeach



@endsection