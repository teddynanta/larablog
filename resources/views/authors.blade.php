{{-- @dd($contents) --}}
@extends('layouts.main')

@section('container')
    <h1 class="mb-5">List of all authors</h1>


<div class="container">
    <div class="row">
        @foreach ($contents as $content)
        {{-- @dd($content) --}}
            <div class="col-md-4 text-center mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/seed/{{ $content->username }}/500/500" class="card-img-top" alt="{{ $content->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $content->name }}</h5>
                        <p class="card-text">Have {{ $content->posts->count() }} posts.</p>
                        <a href="/authors/{{ $content->username }}" class="btn btn-primary btn-sm">See Post</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection