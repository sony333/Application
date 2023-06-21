@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <main class="form-signin ">
            <form action="/login" method="post">
                @csrf
                <h1 class="h3 my-3  fw-normal text-center"><i class="bi bi-fingerprint"></i> Please sign in</h1>

                <div class="form-floating">
                    <input type="email" name="" class="form-control" id="floatingInput" placeholder="name@example.com" autofocus required />
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" name required="password" class="form-control" id="password" placeholder="Password" required />
                    <label for="password">Password</label>
                </div>


                <button class="btn btn-primary w-100 py-2 mt-2" type="submit">
                    Sign in
                </button>
                <small class="d-block text-center mt-2">Not registered? <a href="/register">Register Now!</a></small>

            </form>
        </main>
    </div>
</div>


@endsection