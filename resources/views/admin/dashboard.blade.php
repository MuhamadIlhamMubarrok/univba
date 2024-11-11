@extends('dashboard.app')

@section('title', 'Dashboard')

@section('content')

    @push('style')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
            integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush

    <div class="page-content">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <i class="fa fa-comments fa-5x"></i>
                            </div>
                            <div class="col-9 text-right">
                                <div class="huge">{{ $countContacts }}</div>
                                <div>Kontak</div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="card-footer text-white clearfix small z-1">
                        <span class="float-start">View Details</span>
                        <span class="float-end"><i class="fa fa-arrow-circle-right"></i></span>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <i class="fa fa-file fa-5x"></i>
                            </div>
                            <div class="col-9 text-right">
                                <div class="huge">{{ $countPages }}</div>
                                <div>Halaman</div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="card-footer text-white clearfix small z-1">
                        <span class="float-start">View Details</span>
                        <span class="float-end"><i class="fa fa-arrow-circle-right"></i></span>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-9 text-right">
                                <div class="huge">{{ $countAdmins }}</div>
                                <div>Admin</div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="card-footer text-white clearfix small z-1">
                        <span class="float-start">View Details</span>
                        <span class="float-end"><i class="fa fa-arrow-circle-right"></i></span>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <i class="fa fa-edit fa-5x"></i>
                            </div>
                            <div class="col-9 text-right">
                                <div class="huge">{{ $countRegistrations }}</div>
                                <div>Pendaftaran</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('daftar') }}" class="card-footer text-white clearfix small z-1">
                        <span class="float-start">View Details</span>
                        <span class="float-end"><i class="fa fa-arrow-circle-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>



@endsection
