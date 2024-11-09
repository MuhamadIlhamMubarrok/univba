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
                                        @foreach (['Kelas Karyawan', 'Kelas Reguler Pagi'] as $kelas)
                                            <div class="form-group">
                                                <label class="btn btn-primary w-100">
                                                    <input type="radio" name="kelas" value="{{ $kelas }}"
                                                        {{ old('kelas') == $kelas ? 'checked' : '' }} required>
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
<<<<<<< HEAD
                                <input type="hidden" name="kelas" value="{{ old('kelas', request()->input('kelas')) }}">
=======
                                
                                <input type="hidden" name="kelas" value="{{ request()->input('kelas', $pilihan) }}">
>>>>>>> cd3228fc8170e025588313bb9398db6ed707be62
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item disabled">
                                        <a href="#" class="nav-link"><i class="fa fa-check"></i><br>Pilihan Kelas</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a href="#" class="nav-link"><i class="fa fa-list"></i><br>Formulir
                                            Pendaftaran</a>
                                    </li>
                                </ul>
                                @if ($errors->any())
                                    <div id="error-alert" class="alert alert-danger">
                                        <strong>Terjadi Kesalahan!</strong>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="content">
                                    <label class="alert alert-info"><b>SILAHKAN ISI FORMULIR PENDAFTARAN
                                            BERIKUT</b></label><br>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" name="nama" placeholder="Sesuai KTP"
                                                    class="form-control" value="{{ old('nama') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <div class="form-control">
                                                    <input type="radio" name="jk" value="L"
                                                        {{ old('jk') == 'L' ? 'checked' : '' }} required>
                                                    Laki-laki
                                                    <input type="radio" name="jk" value="P"
                                                        {{ old('jk') == 'P' ? 'checked' : '' }} required>
                                                    Perempuan
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="kampus">Pilih Kampus</label>
                                                <select class="form-control" name="kampus" required>
                                                    <option value="">-- Pilih Kampus --</option>
                                                    <option value="Institut Az Zuhra"
                                                        {{ old('kampus') == 'Institut Az Zuhra' ? 'selected' : '' }}>
                                                        Institut Az Zuhra</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="alamat_ktp">Alamat</label>
                                                <input type="text" name="alamat_ktp" placeholder="Sesuai KTP"
                                                    class="form-control" value="{{ old('alamat_ktp') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="alamat_dom">Alamat Domisili</label>
                                                <input type="text" name="alamat_dom" class="form-control"
                                                    value="{{ old('alamat_dom') }}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="tempat">Tempat Lahir</label>
                                                <input type="text" name="tmpt_lahir" class="form-control"
                                                    value="{{ old('tmpt_lahir') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="tgl">Tanggal Lahir</label>
                                                <input type="date" name="tgl_lahir" class="form-control"
                                                    value="{{ old('tgl_lahir') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="ktp">Nomor KTP</label>
                                                <input type="text" name="ktp" class="form-control"
                                                    value="{{ old('ktp') }}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="nowa">Nomor WhatsApp / HP</label>
                                                <input type="number" name="no_wa" class="form-control"
                                                    value="{{ old('no_wa') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="nohp">Nomor HP Orang Tua</label>
                                                <input type="number" name="no_hp" class="form-control"
                                                    value="{{ old('no_hp') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email">Email *)</label>
                                                <input type="email" name="email" class="form-control"
                                                    value="{{ old('email') }}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="agama">Agama *)</label>
                                                <select class="form-control" name="agama" required>
                                                    <option value="">-- Pilih Agama --</option>
                                                    <option value="Islam"
                                                        {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                                    <option value="Kristen Protestan"
                                                        {{ old('agama') == 'Kristen Protestan' ? 'selected' : '' }}>Kristen
                                                        Protestan</option>
                                                    <option value="Kristen Katholik"
                                                        {{ old('agama') == 'Kristen Katholik' ? 'selected' : '' }}>Kristen
                                                        Katholik</option>
                                                    <option value="Hindu"
                                                        {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                                    <option value="Budha"
                                                        {{ old('agama') == 'Budha' ? 'selected' : '' }}>Budha</option>
                                                    <option value="Konghucu"
                                                        {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="ibu">Nama Ibu</label>
                                                <input type="text" name="ibu" class="form-control"
                                                    value="{{ old('ibu') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="ayah">Nama Ayah</label>
                                                <input type="text" name="ayah" class="form-control"
                                                    value="{{ old('ayah') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="lulusan">Lulusan *)</label>
                                                <select class="form-control" name="lulusan" required>
                                                    <option value="">-- Pilih Lulusan --</option>
                                                    <option value="SMA/MA/SMK/Sederajat"
                                                        {{ old('lulusan') == 'SMA/MA/SMK/Sederajat' ? 'selected' : '' }}>
                                                        SMA/MA/SMK/Sederajat</option>
                                                    <option value="D3/Sederajat"
                                                        {{ old('lulusan') == 'D3/Sederajat' ? 'selected' : '' }}>
                                                        D3/Sederajat</option>
                                                    <option value="Paket C"
                                                        {{ old('lulusan') == 'Paket C' ? 'selected' : '' }}>Paket C
                                                    </option>
                                                    <option value="S1/D4/Sederajat"
                                                        {{ old('lulusan') == 'S1/D4/Sederajat' ? 'selected' : '' }}>
                                                        S1/D4/Sederajat</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="jurusan">Jurusan yang diambil</label>
                                                <select class="form-control" name="jurusan" required>
                                                    <option value="">-- Pilih Jurusan --</option>
                                                    <option value="D3 Manajemen Informatika"
                                                        {{ old('jurusan') == 'D3 Manajemen Informatika' ? 'selected' : '' }}>
                                                        D3 Manajemen Informatika</option>
                                                    <option value="D3 Ilmu Komputer"
                                                        {{ old('jurusan') == 'D3 Ilmu Komputer' ? 'selected' : '' }}>D3
                                                        Ilmu Komputer</option>
                                                    <option value="S1 Manajemen"
                                                        {{ old('jurusan') == 'S1 Manajemen' ? 'selected' : '' }}>S1
                                                        Manajemen</option>
                                                    <option value="S1 Akuntansi"
                                                        {{ old('jurusan') == 'S1 Akuntansi' ? 'selected' : '' }}>S1
                                                        Akuntansi</option>
                                                    <option value="S1 Pendidikan Bahasa Inggris"
                                                        {{ old('jurusan') == 'S1 Pendidikan Bahasa Inggris' ? 'selected' : '' }}>
                                                        S1 Pendidikan Bahasa Inggris</option>
                                                    <option value="S1 Pendidikan Matematika"
                                                        {{ old('jurusan') == 'S1 Pendidikan Matematika' ? 'selected' : '' }}>
                                                        S1 Pendidikan Matematika</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="sekolah">Asal Sekolah/Universitas *)</label>
                                                <input type="text" name="sekolah" class="form-control"
                                                    value="{{ old('sekolah') }}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label for="info">Ukuran Jaket Almamater</label>
                                                <select class="form-control" name="jaket" required>
                                                    <option value="">-- Pilih Ukuran Jaket --</option>
                                                    <option value="S" {{ old('jaket') == 'S' ? 'selected' : '' }}>S
                                                    </option>
                                                    <option value="M" {{ old('jaket') == 'M' ? 'selected' : '' }}>M
                                                    </option>
                                                    <option value="L" {{ old('jaket') == 'L' ? 'selected' : '' }}>L
                                                    </option>
                                                    <option value="XL" {{ old('jaket') == 'XL' ? 'selected' : '' }}>XL
                                                    </option>
                                                    <option value="XXL" {{ old('jaket') == 'XXL' ? 'selected' : '' }}>
                                                        XXL</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <label for="biaya">Biaya kuliah</label>
                                                <label class="form-control">
                                                    <input type="radio" name="biaya" value="Bulanan"
                                                        {{ old('biaya') == 'Bulanan' ? 'checked' : '' }} required> Bulanan
                                                    <input type="radio" name="biaya" value="Semesteran"
                                                        {{ old('biaya') == 'Semesteran' ? 'checked' : '' }} required>
                                                    Semesteran
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label for="info">Sumber Informasi Mengetahui Kampus</label>
                                                <select class="form-control" name="info" required>
                                                    <option value="">-- Pilih Info --</option>
                                                    <option value="Facebook"
                                                        {{ old('info') == 'Facebook' ? 'selected' : '' }}>Facebook</option>
                                                    <option value="Instagram"
                                                        {{ old('info') == 'Instagram' ? 'selected' : '' }}>Instagram
                                                    </option>
                                                    <option value="Tiktok"
                                                        {{ old('info') == 'Tiktok' ? 'selected' : '' }}>Tiktok</option>
                                                    <option value="Google"
                                                        {{ old('info') == 'Google' ? 'selected' : '' }}>Google</option>
                                                    <option value="Brosur"
                                                        {{ old('info') == 'Brosur' ? 'selected' : '' }}>Brosur</option>
                                                    <option value="Datang Langsung"
                                                        {{ old('info') == 'Datang Langsung' ? 'selected' : '' }}>Datang
                                                        Langsung</option>
                                                    <option value="Teman/Keluarga"
                                                        {{ old('info') == 'Teman/Keluarga' ? 'selected' : '' }}>
                                                        Teman/Keluarga</option>
                                                    <option value="SGS (Student Get Student)"
                                                        {{ old('info') == 'SGS (Student Get Student)' ? 'selected' : '' }}>
                                                        SGS (Student Get Student)</option>
                                                    <option value="Agency"
                                                        {{ old('info') == 'Agency' ? 'selected' : '' }}>Agency</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <label class="alert alert-info"><b>(KOSONGKAN FORMULIR DI BAWAH INI JIKA BELUM
                                            BEKERJA)</b></label>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="kerja">Nama Perusahaan</label>
                                                <input type="text" name="kerja" class="form-control"
                                                    value="{{ old('kerja') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="jabatan">Jabatan Pekerjaan</label>
                                                <input type="text" name="jabatan" class="form-control"
                                                    value="{{ old('jabatan') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="al_kerja">Alamat Perusahaan</label>
                                                <input type="text" name="al_kerja" class="form-control"
                                                    value="{{ old('al_kerja') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="no_kantor">Nomor Telepon Perusahaan</label>
                                                <input type="text" name="no_kantor" class="form-control"
                                                    value="{{ old('no_kantor') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <div class="box-footer">
                                    <div class="pull-left">
                                        <a href="index.php?m=daftar&step=1" class="btn btn-primary" style="width: 150px">
                                            <i class="fa fa-chevron-left"></i>Kembali
                                        </a>
                                    </div>
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-success" style="width: 150px"
                                            onClick="return confirm('Anda yakin dengan data ini?')">
                                            Daftar<i class="fa fa-chevron-right"></i>
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

@push('addon-script')
    <script>
        // Fungsi untuk menghilangkan alert error setelah 10 detik
        document.addEventListener("DOMContentLoaded", function() {
            const errorAlert = document.getElementById("error-alert");
            if (errorAlert) {
                setTimeout(() => {
                    errorAlert.style.display = "none";
                }, 10000); // 10 detik
            }
        });
    </script>
@endPush
