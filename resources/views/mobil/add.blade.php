@extends('templates.mainTemplate')

@section('mainContent')
    {{-- Tambah Mobil --}}
    <section class="mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <div class="card text-center">
                    <div class="card-header">
                        Tambah Mobil
                    </div>
                    <div class="card-body">
                        <form action="/mobil/add" method="post">
                            @csrf
                            @method('post')
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="merek" placeholder="name@example.com">
                                        <label for="floatingInput">Merek</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="model" placeholder="name@example.com">
                                        <label for="floatingInput">Model</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="noplat" placeholder="name@example.com">
                                        <label for="floatingInput">Nomor Plat</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="floatingInput" name="tarifsewa" placeholder="name@example.com">
                                        <label for="floatingInput">Tarif Sewa per Hari</label>
                                    </div>
                                    <div class="mt-5 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-outline-success btn-sm">Submit</button>
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