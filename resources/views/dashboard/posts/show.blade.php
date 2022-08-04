@extends('dashboard.layouts.main')

@section('container')
<div class="container mb-3">

    <h2 class="mb-3">{{ $post->title }}</h2> 
    <a href="" class="btn btn-sm btn-warning"><span data-feather="edit"></span> Edit</a>
    <a href="" class="btn btn-sm btn-danger"><span data-feather="x-circle"></span> Delete</a>
    
    <img src="https://picsum.photos/seed/{{ $post->category->slug }}/1200/400" class="img-fluid mt-3" alt="{{ $post->category->category }}">

    <article class="my-3">

        {!! $post->content !!}

    </article>

    <a href="/dashboard/posts" class="btn btn-primary btn-sm text-decoration-none">Back</a>

</div>
@endsection