@extends('layouts.main')
@section('container')
        <div class="row justify-content-center">
            <div class="col-lg-5">
                {{-- Jika kita berhasil melakukan registrasi alert ini akan muncul , alert ini diatur didalam RegisterController --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session ('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="container bg-white pt-2" style=border-radius:10px>
                    <main class="form-register">
                        <form action="/register" method="POST">
                           @csrf
                            <h1 align="center" class="h3 mb-3 fw-normal" style="color:gray;padding-bottom:20px;">Register</h1>

                            <div class="form__group field">
                                <input type="text" name="name" class="form-control form__field mt-2" id="name" placeholder="name">
                                <label class="form__label" for="name">Name</label>
                            </div>
                            <div class="form__group field">
                                <input type="email" name="email" class="form-control form__field mt-2" id="email" placeholder="name@example.com">
                                <label class="form__label" for="email">Email address</label>
                            </div>
                            <div class="form__group field">
                                <input type="password" name="password" class="form-control form__field mt-2" id="password" placeholder="Password">
                                <label class="form__label" for="password">Password</label>
                            </div>
                            <div class="form__group field">
                                <input type="nis" name="nis" class="form-control form__field mt-2" id="nis" placeholder="nis">
                                <label class="form__label" for="nis">Nis</label>
                            </div>
                            <div class="form__group field">
                                <input type="text" name="rombel" class="form-control form__field mt-2" id="rombel" placeholder="rombel">
                                <label class="form__label" for="rombel">Rombel</label>
                            </div>
                            <div class="form__group field">
                                <input type="text" name="rayon" class="form-control form__field mt-2" id="rayon" placeholder="rayon">
                                <label class="form__label" for="rayon">Rayon</label>
                            </div>
                            <div class="form-floating">
                            <div class="form-group" style="color:gray; font-size:16px;">
                            <label for="ket">Keterangan</label>
                                <input type="radio" name="ket" value="Hadir"> Hadir
                                <input type="radio" name="ket" value="Sakit"> Sakit
                                <input type="radio" name="ket" value="Ijin"> Ijin
                                <input type="radio" name="ket" value="Alfa"> Alfa
                            </div>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Submit</button>
                            
                        </form>
                        <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login">Login</a></small>
                    </main>
                </div>
            </div>
        </div>
@endsection