{{-- @dd($contents) --}}
@extends('layouts.main')

@section('container')
    <h1 class="mb-5 text-center">List of all {{ $title }}</h1>


<div class="container">

    <div class="row">
        @foreach ($contents as $content)
        {{-- @dd($content) --}}
            <div class="col-md-4 text-center mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/seed/{{ ($title === 'Authors') ? $content->username : $content->slug }}/500/500" class="card-img-top" alt="{{ ($title === 'Authors') ? $content->name : $content->category }}">

                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ ($title === 'Authors') ? '/?author=' .  $content->username  : '/?category=' .  $content->slug }}" class="text-decoration-none text-dark">{{ ($title === 'Authors') ? $content->name : $content->category }}</a></h5>
                        <p class="card-text">Have {{ $content->posts->count() }} posts.</p>
                        <a href="{{ ($title === 'Authors') ? '/?author=' .  $content->username  : '/?category=' .  $content->slug }}" class="btn btn-primary btn-sm">See Post</a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection