{{-- @dd($posts[0['attributes']]) --}}
@extends('layouts.main')

@section('container')

@if ($posts->count())
    <h1 class="mb-5">{{ $title }}</h1>

    <div class="card mb-3">

        <img src="https://picsum.photos/seed/{{ $posts[0]->category->slug }}/1200/400" class="card-img-top" alt="{{ $posts[0]->category->category }}">

        <div class="card-body text-center">
            
            <h2 class="card-title"><a class="text-decoration-none text-dark" href="/post/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h2>

            <p class="card-text">
                <small class="text-muted">
                    By: <a class="text-decoration-none" href="/authors/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->category }}</a> {{ $posts[0]->updated_at->diffForHumans() }}
                </small>
            </p>            

            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/post/{{ $posts[0]->slug }}" class="btn btn-sm btn-primary">Read more</a>

        </div>

    </div>


    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="position-absolute px-3 py-1" style="background-color: rgba(0, 0, 0, 0.7)"><a class="text-decoration-none text-white" href="/categories/{{ $post->category->slug }}">{{ $post->category->category }}</a></div>
                        <img src="https://picsum.photos/seed/{{ $post->category->slug }}/500/500" class="card-img-top" alt="{{ $post->category->category }}">

                        <div class="card-body">
                            
                            <h5 class="card-title"><a class="text-decoration-none text-dark" href="/post/{{ $post->slug }}">{{ $post->title }}</a></h5>

                            <p class="card-text">
                                <small class="text-muted">
                                    By: <a class="text-decoration-none" href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> {{ $post->updated_at->diffForHumans() }}
                                </small>
                            </p>            

                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/post/{{ $post->slug }}" class="btn btn-sm btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- @foreach ($posts->skip(1) as $post)

    <article class="mb-5 border-bottom">
        
        <h2><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
        <h6>By: <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->category }}</a></h6>
        <p>{{ $post->excerpt }} <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read more...</a></p>

    </article>
    @endforeach --}}

@else
    <p class="text-center fs-4">No post found.</p>
@endif



@endsection