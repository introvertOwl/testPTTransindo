@extends('templates.mainTemplate')

@section('mainContent')
    {{-- Edit Profile Form --}}
    <section class="mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <div class="card text-center">
                    <div class="card-header">
                        Formulir Edit Profile
                    </div>
                    <div class="card-body">
                        <form action="/myprofile/{{ auth()->user()->id }}" method="post">
                            @csrf
                            @method('patch')
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
                                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="floatingInput" name="alamat" value="{{ old('alamat') }}" placeholder="Alamat Lengkap">
                                        <label for="floatingInput">Alamat</label>
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="floatingInput" name="telepon" value="{{ old('telepon') }}" placeholder="Nomor Telepon">
                                        <label for="floatingInput">Telepon</label>
                                        @error('telepon')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control @error('sim') is-invalid @enderror" id="floatingInput" value="{{ old('sim') }}" name="sim" placeholder="Nomor SIM A">
                                        <label for="floatingInput">Nomor SIM</label>
                                        @error('sim')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" value="{{ old('password') }}" name="password" placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mt-5 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa-solid fa-user-pen me-1"></i>Edit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection