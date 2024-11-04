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
                                        <a href="#" class="nav-link"><i class="fa fa-list"></i><br>Formulir Pendaftaran</a>
                                    </li>
                                </ul>

                                <div class="content">
                                    <div class="form-group">
                                        <label>Silahkan Pilih Kelas (di KLIK)</label>
                                        @foreach (['Kelas Karyawan', 'Kelas Reguler Pagi'] as $kelas)
                                            <div class="form-group">
                                                <label class="btn btn-primary w-100">
                                                    <input type="radio" name="kelas" value="{{ $kelas }}" required>
                                                    {{ $kelas }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="box-footer text-center">
                                    <input type="hidden" name="step" value="2">
                                    <button type="submit" class="btn btn-success w-100" style="float:right;">
                                        SELANJUTNYA <i class="fa fa-chevron-right"></i>
                                    </button>
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
                                        <a href="#" class="nav-link"><i class="fa fa-list"></i><br>Formulir Pendaftaran</a>
                                    </li>
                                </ul>

                                <div class="content">
                                    <label class="alert alert-info"><b>SILAHKAN ISI FORMULIR PENDAFTARAN BERIKUT</b></label><br>

                                    <!-- Form fields as defined before -->
                                    <!-- Example for Name and Gender fields -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" name="nama" placeholder="Sesuai KTP" class="form-control" required>
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
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="jurusan">Pilih Kampus</label>
                                                <select class="form-control" name="kampus" required>
                                                    <option value="">-- Pilih Kampus --</option>
                                                    <option>Institut Az Zuhra</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="alamat_ktp">Alamat</label>
                                                <input type="text" name="alamat_ktp" placeholder="Sesuai KTP" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="alamat_dom">Alamat Domisili</label>
                                                <input type="text" name="alamat_dom" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
    
                                    <div class="row">
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="tempat">Tempat Lahir</label>
                                                <input type="text" name="tmpt_lahir" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="tgl">Tanggal Lahir</label>
                                                <input type="date" name="tgl_lahir" class="form-control" placeholder="12-12-2000" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="ktp">Nomor KTP</label>
                                                <input type="text" name="ktp" class="form-control" required>
                                            </div>
                                        </div>
    
                                    </div>
    
                                    <div class="row">
    
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="nowa">Nomor WhatsApp / HP</label>
                                                <input type="number" name="no_wa" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="nohp">Nomor HP Orang Tua</label>
                                                <input type="number" name="no_hp" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email">Email *)</label>
                                                <input type="email" name="email" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="email">Agama *)</label>
                                                <select class="form-control" name="agama" required>
                                                    <option value="">-- Pilih Agama --</option>
                                                    <option>Islam</option>
                                                    <option>Kristen Protestan</option>
                                                    <option>Kristen Katholik</option>
                                                    <option>Hindu</option>
                                                    <option>Budha</option>
                                                    <option>Konghucu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="ibu">Nama Ibu</label>
                                                <input type="text" name="ibu" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="ayah">Nama Ayah</label>
                                                <input type="text" name="ayah" class="form-control">
                                            </div>
                                        </div>
    
                                    </div>
    
                                    <div class="row">
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="lulusan">Lulusan *)</label>
                                                <select class="form-control" name="lulusan" required>
                                                    <option value="">-- Pilih Lulusan --</option>
                                                    <option>SMA/MA/SMK/Sederajat</option>
                                                    <option>D3/Sederajat</option>
                                                    <option>Paket C</option>
                                                    <option>S1/D4/Sederajat</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="jurusan">Jurusan yang diambil</label>
                                                <select class="form-control" name="jurusan" required>
                                                    <option value="">-- Pilih Jurusan --</option>
                                                    <option>D3 Manajemen Informatika</option>
                                                    <option>D3 Ilmu Komputer</option>
                                                    <option>S1 Manajemen</option>
                                                    <option>S1 Akuntansi</option>
                                                    <option>S1 Pendidikan Bahasa Inggris</option>
                                                    <option>S1 Pendidikan Matematika</option>
                                                
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="sekolah">Asal Sekolah/Universitas *)</label>
                                                <input type="text" name="sekolah" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="info">Ukuran Jaket Almamater</label>
                                                <select class="form-control" name="jaket" required>
                                                    <option value="">-- Pilih Ukuran Jaket --</option>
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                    <option>XL</option>
                                                    <option>XXL</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="lastname">Biaya kuliah</label>
                                                <label class="form-control"><input type="radio" name="biaya" value="Bulanan" required> Bulanan
                                                    <input type="radio" name="biaya" value="Semesteran" required> Semesteran</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label for="info">Sumber Informasi Mengetahui Kampus</label>
                                                <select class="form-control" name="info" required>
                                                    <option value="">-- Pilih Info --</option>
                                                    <option>Facebook</option>
                                                    <option>Instagram</option>
                                                    <option>Tiktok</option>
                                                    <option>Google</option>
                                                    <option>Brosur</option>
                                                    <option>Datang Langsung</option>
                                                    <option>Teman/Keluarga</option>
                                                    <option>SGS (Student Get Student)</option>
                                                    <option>Agency</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <label class="alert alert-info"><b>(KOSONGKAN FORMULIR DI BAWAH INI JIKA BELUM BEKERJA)</b></label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="kerja">Nama Perusahaan</label>
                                                <input type="text" name="kerja" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="jabatan">Jabatan Pekerjaan</label>
                                                <input type="text" name="jabatan" class="form-control">
                                            </div>
                                        </div>
                                        <!--<div class="col-sm-12">-->
                                        <!--    <div class="form-group">-->
                                        <!--        <label for="al_kerja">Alamat Perusahaan</label>-->
                                        <!--        <input type="text" name="al_kerja" class="form-control">-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="no_kantor">Nomor Telepon Perusahaan</label>
                                                <input type="text" name="no_kantor" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <div class="box-footer">
                                    <div class="pull-left">
                                        <a href="index.php?m=daftar&step=1" class="btn btn-primary" style="width: 150px"><i class="fa fa-chevron-left"></i>Kembali</a>
                                    </div>
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-success" style="width: 150px" onClick="return confirm('Anda yakin dengan data ini?')">Daftar<i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
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
