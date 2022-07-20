@extends('layouts.main')

@section('container')

<div class="row justify-content-center mt-5">
    <div class="col-md-6">

        <main class="form-registration w-100 m-auto text-center">
            <form>
                <img class="mb-4" src="/img/bug-fill.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Please fill in the blanks</h1>
            
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top" id="floatingName" placeholder="John Doe">
                    <label for="floatingName">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="floatingUsername" placeholder="johndoe123">
                    <label for="floatingUsername">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Create Account</button>
            </form>
            <p>Does have an account? <a href="/login">Login</a></p>
            <p class="mt-4 mb-3 text-muted">&copy; 2017–2022</p>
        </main>

    </div>
</div>

@endsection