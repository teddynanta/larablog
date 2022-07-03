
@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Welcome Home, {{ $name }}</h1>


@foreach ($posts as $post)
    <h2 class="mt-5">{{ $post['title'] }}</h2>
    <h4>By: <a href="/category/{{ $post['author'] }}">{{ $post['author'] }}</a> at <a href="/category/{{ $post['category'] }}">{{ $post['category'] }}</a> category.</h4>
    <p>{{ $post['content'] }}</p>
@endforeach



@endsection