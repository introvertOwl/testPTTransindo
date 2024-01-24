@extends('templates.mainTemplate')

@section('mainContent')
    {{-- My Profile --}}
    <section class="mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <div class="card text-center">
                    <div class="card-header">
                        My Profile
                    </div>
                    <div class="card-body">
                        <form action="/register" method="post">
                            @csrf
                            @method('post')
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <strong><i class="fas fa-user me-1"></i>Name</strong>
                                            <p class="text-muted">
                                                {{ auth()->user()->nama }}
                                            </p> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <strong><i class="fas fa-user me-1"></i>Telepon</strong>
                                            <p class="text-muted">
                                                {{ auth()->user()->telepon }}
                                            </p> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <strong><i class="fas fa-user me-1"></i>Alamat</strong>
                                            <p class="text-muted">
                                                {{ auth()->user()->alamat }}
                                            </p> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <strong><i class="fas fa-user me-1"></i>Nomor SIM</strong>
                                            <p class="text-muted">
                                                {{ auth()->user()->sim }}
                                            </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex flex-row-reverse mt-5">
                                <div class="col-lg-4">
                                    <a href="/myprofile/edit/{{ auth()->user()->id }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-user-pen me-1"></i>Edit</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection