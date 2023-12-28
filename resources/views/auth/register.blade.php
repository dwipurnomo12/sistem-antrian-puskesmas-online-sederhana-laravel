@extends('layouts.app')

@section('container-login')
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">


                    <div class="card mb-3">
                        <div class="card-body">

                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Buat Akun Baru</h5>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form class="row g-3 needs-validation" action="{{ route('register') }}" method="post"
                                novalidate>
                                @csrf

                                <input type="hidden" value="2" name="role_id">
                                <div class="col-12">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="password" class="form-label">Konfirmasi Password</label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                        id="password_confirmation" required>
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100 mb-2" type="submit">Daftar</button>
                                    <a class="btn btn-danger w-100" href="/login" role="button">Masuk</a>
                                </div>
                            </form>

                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>
@endsection
