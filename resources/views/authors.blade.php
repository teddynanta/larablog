
@extends('layouts.main')

@section('container')
    <h1 class="mb-5">List of all authors</h1>


@foreach ($authors as $author)
<ul>
    <li>
        <h2><a href="/author/{{ $author->id }}" class="text-decoration-none">{{ $author->name }}</a></h2>
    </li>
</ul>
@endforeach



@endsection