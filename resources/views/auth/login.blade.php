@extends('templates.mainTemplate')

@section('mainContent')
    <section class="mt-5">
        <div class="row d-flex justify-content-center">
            {{-- Alert Registrasi berhasil --}}
            @if (session()->has('reg_success'))
                <div class="row mb-4 pt-4 d-flex justify-content-center">
                    <div class="col-lg-6 "> 
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{ session('reg_success') }}</strong> 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @endif{{-- /.Alert Registrasi berhasil --}}

            {{-- Alert Registrasi gagal --}}
            @if (session()->has('login_failed'))
                <div class="row mb-4 pt-4 d-flex justify-content-center">
                    <div class="col-lg-6 "> 
                        <div class="alert alert-danger alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{ session('login_failed') }}</strong> 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @endif{{-- /.Alert Registrasi gagal --}}

            {{-- Login Form --}}
            <div class="col-md-5">
                <div class="card text-center">
                    <div class="card-header">
                        Formulir Registrasi
                    </div>
                    <div class="card-body">
                        <form action="/login" method="post">
                            @csrf
                            @method('post')
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="floatingInput" name="nama" value="{{ old('nama') }}" placeholder="Nama Lengkap">
                                        <label for="floatingInput">Nama</label>
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control @error('sim') is-invalid @enderror" id="floatingInput" name="sim" value="{{ old('sim') }}" placeholder="Nomor SIM">
                                        <label for="floatingInput">Nomor SIM</label>
                                        @error('sim')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                    <div class="mt-5 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-outline-success btn-sm">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>{{-- /.Login Form --}}
        </div>
    </section>
@endsection