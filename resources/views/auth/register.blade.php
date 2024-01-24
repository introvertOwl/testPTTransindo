@extends('templates.mainTemplate')

@section('mainContent')
        {{-- Register Form --}}
        <section class="mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-5">
                    <div class="card text-center">
                        <div class="card-header">
                          Formulir Registrasi
                        </div>
                        <div class="card-body">
                            <form action="/register" method="post">
                                @csrf
                                @method('post')
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" name="nama" placeholder="name@example.com">
                                            <label for="floatingInput">Nama</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" name="alamat" placeholder="name@example.com">
                                            <label for="floatingInput">Alamat</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" name="telepon" placeholder="name@example.com">
                                            <label for="floatingInput">Telepon</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" name="sim" placeholder="name@example.com">
                                            <label for="floatingInput">Nomor SIM</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                                            <label for="floatingPassword">Password</label>
                                        </div>
                                        <div class="mt-5 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-outline-success btn-sm">Register</button>
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