@extends('layouts.app')

@section('container-login')
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Masuk Ke Akun Anda</h5>
                            </div>


                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session()->has('pending'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    {{ session('pending') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <form class="row g-3 needs-validation" action="{{ route('login') }}" method="post" novalidate>
                                @csrf

                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email"
                                        class="form-control  @error('email') is-invalid @enderror" id="email" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password"
                                        class="form-control  @error('password') is-invalid @enderror" id="password"
                                        required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Masuk</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Belum Punya Akun ? <a href="/register">Buat Akun</a></p>
                                </div>
                            </form>

                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>
@endsection
