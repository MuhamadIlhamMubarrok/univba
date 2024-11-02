@extends('Frontend.Layouts.page')

@section('content')
    <div id="content">
        <div class="container">
            <div class="row">
                <!-- Step 1 -->
                @if ($step == 1)
                    <div class="col-12 col-md-12 clearfix" id="checkout">
                        <div class="box">
                            <form method="get" action="{{ route('registration.show') }}">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item active">
                                        <a href="#" class="nav-link"><i class="fa fa-check"></i><br>Pilihan Kelas</a>
                                    </li>
                                    <li class="nav-item disabled">
                                        <a href="#" class="nav-link"><i class="fa fa-list"></i><br>Formulir
                                            Pendaftaran</a>
                                    </li>
                                </ul>

                                <div class="content">
                                    <div class="form-group">
                                        <label>Silahkan Pilih Kelas (di KLIK)</label>
                                        @foreach (['Kelas Karyawan', 'Kelas Reguler Pagi', 'Kelas Reguler Sore', 'Kelas RPL'] as $kelas)
                                            <div class="form-group">
                                                <label class="btn btn-primary w-100">
                                                    <input type="radio" name="kelas" value="{{ $kelas }}"
                                                        required> {{ $kelas }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="box-footer text-center">
                                    <button type="submit" class="btn btn-success w-100">SELANJUTNYA <i
                                            class="fa fa-chevron-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Step 2 -->
                @elseif ($step == 2)
                    <div class="col-12 col-md-12 clearfix" id="checkout">
                        <div class="box">
                            <form method="post" action="{{ route('registration.store') }}">
                                @csrf
                                <input type="hidden" name="kelas" value="{{ request()->input('kelas', $pilihan) }}">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item disabled">
                                        <a href="#" class="nav-link"><i class="fa fa-check"></i><br>Pilihan Kelas</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a href="#" class="nav-link"><i class="fa fa-list"></i><br>Formulir
                                            Pendaftaran</a>
                                    </li>
                                </ul>

                                <div class="content">
                                    <label class="alert alert-info"><b>SILAHKAN ISI FORMULIR PENDAFTARAN
                                            BERIKUT</b></label><br>

                                    <!-- Formulir Data Diri -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" name="nama" placeholder="Sesuai KTP"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <div class="form-control">
                                                    <input type="radio" name="jk" value="L" required> Laki-laki
                                                    <input type="radio" name="jk" value="P" required> Perempuan
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="kampus">Pilih Kampus</label>
                                                <select class="form-control" name="kampus" required>
                                                    <option value="">-- Pilih Kampus --</option>
                                                    <option>UMIBA - Pasar Minggu</option>
                                                    <option>UMIBA - Bintaro</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat_ktp" placeholder="Sesuai KTP"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Alamat Domisili</label>
                                                <input type="text" name="alamat_dom" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input type="text" name="tmpt_lahir" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" name="tgl_lahir" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Formulir tambahan lainnya seperti yang sudah ada di kode Anda -->

                                </div>

                                <div class="box-footer text-center">
                                    <a href="{{ route('registration.show', ['step' => 1]) }}"
                                        class="btn btn-primary w-100 mb-2"><i class="fa fa-chevron-left"></i> Kembali</a>
                                    <button type="submit" class="btn btn-success w-100"
                                        onclick="return confirm('Anda yakin dengan data ini?')">Daftar <i
                                            class="fa fa-chevron-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <style>
        /* Media query untuk membuat tampilan lebih responsif */
        @media (max-width: 576px) {
            .nav-pills .nav-link {
                font-size: 12px;
            }
        }
    </style>
@endsection
