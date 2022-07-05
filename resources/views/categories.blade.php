
@extends('layouts.main')

@section('container')
    <h1 class="mb-5">List of all categories</h1>


@foreach ($categories as $category)
<ul>
    <li>
        <h2><a href="/categories/{{ $category->slug }}">{{ $category->category }}</a></h2>
    </li>
</ul>
@endforeach



@endsection