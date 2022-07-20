@extends('layouts.main')

@section('container')

<div class="row justify-content-center mt-5">
    <div class="col-md-6">

        <main class="form-registration w-100 m-auto ">
            <form action="/register" method="POST">
                @csrf
                <img class="mb-4 d-block mx-auto" src="/img/bug-fill.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal text-center">Create your account</h1>
            
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="floatingName" placeholder="John Doe" value="{{ old('name') }}" required>
                    <label for="floatingName">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="floatingUsername" placeholder="johndoe123" value="{{ old('username') }}" required>
                    <label for="floatingUsername">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}" required>
                    <label for="floatingInput">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Create Account</button>
            </form>
            <p class="text-center">Does have an account? <a href="/login">Login</a></p>
            <p class="mt-4 mb-3 text-muted text-center">&copy; 2017–2022</p>
        </main>

    </div>
</div>

@endsection