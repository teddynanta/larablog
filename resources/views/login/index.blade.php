@extends('layouts.main')

@section('container')

<div class="row justify-content-center mt-5">
    <div class="col-md-6">

        @if (session()->has('success'))
            
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        @endif

        <main class="form-signin w-100 m-auto text-center">
            <form>
                <img class="mb-4" src="/img/bug-fill.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Please Login</h1>
            
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
            </form>
            <p>Does not have an account? <a href="/register">Create account</a></p>
            <p class="mt-4 mb-3 text-muted">&copy; 2017–2022</p>
        </main>

    </div>
</div>

@endsection