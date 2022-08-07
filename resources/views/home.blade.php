{{-- @dd($posts[0['attributes']]) --}}
@extends('layouts.main')

@section('container')

<h1 class="mb-3 text-center">{{$title}}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i></button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count())
    <div class="card mb-3">

        @if ($posts[0]->image)
        <div style="max-height: 1200px; overflow: hidden" class="text-center">
            <img src="{{ asset('storage/' . $posts[0]->image)  }}" class="img-fluid mt-3" alt="{{ $posts[0]->category->category }}">
        </div>
        @else
            <img src="https://picsum.photos/seed/{{ $posts[0]->category->slug }}/1200/400" class="card-img-top" alt="{{ $posts[0]->category->category }}">
        @endif


        <div class="card-body text-center">
            
            <h2 class="card-title"><a class="text-decoration-none text-dark" href="/post/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h2>

            <p class="card-text">
                <small class="text-muted">
                    By: <a class="text-decoration-none" href="/?author={{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in <a class="text-decoration-none" href="/?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->category }}</a> {{ $posts[0]->updated_at->diffForHumans() }}
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
                        <div class="position-absolute px-3 py-1" style="background-color: rgba(0, 0, 0, 0.7)"><a class="text-decoration-none text-white" href="/?category={{ $post->category->slug }}">{{ $post->category->category }}</a></div>
                        @if ($post->image)
                        <div style="max-height: 500px; overflow: hidden">
                            <img src="{{ asset('storage/' . $post->image)  }}" class="img-fluid mt-3" alt="{{ $post->category->category }}">
                        </div>
                        @else
                            <img src="https://picsum.photos/seed/{{ $post->category->slug }}/500/500" class="card-img-top" alt="{{ $post->category->category }}">
                        @endif


                        <div class="card-body">
                            
                            <h5 class="card-title"><a class="text-decoration-none text-dark" href="/post/{{ $post->slug }}">{{ $post->title }}</a></h5>

                            <p class="card-text">
                                <small class="text-muted">
                                    By: <a class="text-decoration-none" href="/?author={{ $post->user->username }}">{{ $post->user->name }}</a> {{ $post->updated_at->diffForHumans() }}
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

@else
    <p class="text-center fs-4">No post found.</p>
@endif
<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>

@endsection