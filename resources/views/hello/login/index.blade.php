@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
    @if (session('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session ('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="container bg-white" style="border-radius:10px;">
        <main class="form-login">
            <form action="/login" method="post">
                @csrf
                <h1 align=center class="h3 mb-3 fw-normal pt-2"style="color:gray;padding-bottom:20px;">Login</h1>
                <div class="form__group field">
                    <input type="text" class="form__field" class="form-control mt-2" placeholder="Name" name="name" id='name' required />
                    <label for="name" class="form__label">Name</label>
                </div>
                <div class="form__group field">
                    <input type="email" class="form__field" class="form-control mt-2" placeholder="Email" name="email" id='email' required />
                    <label for="email" class="form__label">Email Address</label>
                </div>
                <div class="form__group field">
                    <input type="password" class="form__field" class="form-control mt-2" placeholder="password" name="password" id='password' required />
                    <label for="password" class="form__label">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Belum punya akun? <a href="/register">Register</a></small>
        </main>
    </div>
    </div>
</div>
@endsection