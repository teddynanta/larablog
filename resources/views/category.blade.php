
@extends('layouts.main')

@section('container')
<h1>Post Category : {{ $title }}</h1>

@foreach ($posts as $post)
    <article>
        <h2 class="mt-5"><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <h4>{{ $post->user->name }}</h4>
        <p>{{ $post->excerpt }} <a href="/post/{{ $post->slug }}">Read more...</a></p>
    </article>
@endforeach



@endsection