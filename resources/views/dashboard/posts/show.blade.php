@extends('dashboard.layouts.main')

@section('container')
<div class="container mb-3">

    <h2 class="mb-3">{{ $post->title }}</h2> 
    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-warning"><span data-feather="edit"></span> Edit</a>
    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
        {{-- <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a> --}}
    </form>
    
    @if ($post->image)
        <div style="max-height:1200px; overflow:hidden">
            <img src="{{ asset('storage/' . $post->image)  }}" class="img-fluid mt-3" alt="{{ $post->category->category }}">
        </div>
    @else
        <img src="https://picsum.photos/seed/{{ $post->category->slug }}/1200/400" class="img-fluid mt-3" alt="{{ $post->category->category }}">
    @endif

    <article class="my-3">

        {!! $post->content !!}

    </article>

    <a href="/dashboard/posts" class="btn btn-primary btn-sm text-decoration-none">Back</a>

</div>
@endsection