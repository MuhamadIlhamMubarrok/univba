@extends('Frontend.Layouts.app2')

@section('content')
    <x-header-section-page title="Daftar Online Mulia Darma Pratama" breadcrumb-home="Home" breadcrumb-current="Daftar Online" />

    <!-- Step 1 -->
    @if ($step == 1)
        <div data-aos="fade-up" class="py-10 bg-gray-50">
            <div data-aos="fade-up" class="container mx-auto px-4 lg:px-20 max-w-screen-lg">
                <div data-aos="fade-up" class="bg-white shadow-md rounded-lg overflow-hidden">
                    <!-- Header -->
                    <div data-aos="fade-up" class="bg-primary text-white p-6 text-center">
                        <h2 data-aos="fade-up" class="text-2xl font-poppins font-semibold">Pilih Kelas</h2>
                        <p data-aos="fade-up" class="text-sm mt-2 font-dmsans">Pilih kelas yang sesuai untuk memulai proses
                            pendaftaran</p>
                    </div>
                    <!-- Form -->
                    <div data-aos="fade-up" class="p-6">
                        <form method="get" action="{{ route('registration.show') }}">
                            <div data-aos="fade-up" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Kelas Karyawan -->
                                <label data-aos="fade-up"
                                    class="relative block p-4 border border-primary rounded-lg shadow-md hover:shadow-lg transition cursor-pointer peer-checked:ring-2 peer-checked:ring-accent peer-checked:ring-offset-2">
                                    <input type="radio" name="kelas" value="Kelas Karyawan" data-aos="fade-up"
                                        class="hidden peer" required>
                                    <!-- Checklist Icon -->
                                    <div data-aos="fade-up"
                                        class="absolute top-3 right-3 hidden peer-checked:block bg-accent text-white w-8 h-8 rounded-full flex items-center justify-center">
                                        <i data-aos="fade-up" class="fa-solid fa-circle-check text-white"></i>
                                    </div>
                                    <div data-aos="fade-up" class="text-center">
                                        <h3 data-aos="fade-up"
                                            class="text-lg font-poppins text-primary peer-checked:text-accent">Kelas
                                            Karyawan</h3>
                                        <p data-aos="fade-up"
                                            class="text-sm text-gray-500 peer-checked:text-gray-700 font-poppins font-dmsans">
                                            Pilihan
                                            untuk karyawan yang ingin melanjutkan pendidikan.</p>
                                    </div>
                                </label>

                                <!-- Kelas RPL -->
                                <label data-aos="fade-up"
                                    class="relative block p-4 border border-primary rounded-lg shadow-md hover:shadow-lg transition cursor-pointer peer-checked:ring-2 peer-checked:ring-accent peer-checked:ring-offset-2">
                                    <input type="radio" name="kelas" value="Kelas RPL" data-aos="fade-up"
                                        class="hidden peer" required>
                                    <!-- Checklist Icon -->
                                    <div data-aos="fade-up"
                                        class="absolute top-3 right-3 hidden peer-checked:block bg-accent text-white w-8 h-8 rounded-full flex items-center justify-center">
                                        <i data-aos="fade-up" class="fa-solid fa-circle-check text-white"></i>
                                    </div>
                                    <div data-aos="fade-up" class="text-center">
                                        <h3 data-aos="fade-up"
                                            class="text-lg font-poppins text-primary peer-checked:text-accent">Kelas RPL
                                        </h3>
                                        <p data-aos="fade-up"
                                            class="text-sm text-gray-500 peer-checked:text-gray-700 font-poppins font-dmsans">
                                            Pilihan
                                            kelas RPL untuk mahasiswa baru.</p>
                                    </div>
                                </label>
                            </div>
                            <!-- Submit Button -->
                            <div data-aos="fade-up" class="mt-6 text-center">
                                <input type="hidden" name="step" value="2">
                                <button type="submit" data-aos="fade-up"
                                    class="w-full md:w-1/2 bg-primary text-white py-3 rounded-lg hover:bg-accent transition">
                                    SELANJUTNYA <i data-aos="fade-up" class="fa fa-chevron-right ml-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Step 2 -->
    @if ($step == 2)
        <div data-aos="fade-up" class="py-10 bg-gray-50">

            <div data-aos="fade-up" class="container mx-auto px-4 lg:px-20 max-w-screen-lg">
                <div data-aos="fade-up" class="bg-white shadow-md rounded-lg overflow-hidden">
                    <!-- Header -->
                    <div data-aos="fade-up" class="bg-primary text-white p-6 text-center">
                        <h2 data-aos="fade-up" class="text-2xl font-poppins font-semibold">Formulir Pendaftaran</h2>
                        <p data-aos="fade-up" class="text-sm mt-2 font-dmsans">Lengkapi data Anda untuk melanjutkan proses
                            pendaftaran</p>
                    </div>
                    <!-- Form -->
                    <div data-aos="fade-up" class="p-6">
                        <form method="post" action="{{ route('registration.store') }}">
                            @if ($errors->any())
                                <div data-aos="fade-up"
                                    class="p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-lg">
                                    <p data-aos="fade-up" class="text-sm font-dmsans font-medium"><strong>Terjadi
                                            Kesalahan!</strong></p>
                                    <ul data-aos="fade-up" class="list-disc pl-6 text-sm font-dmsans">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @csrf
                            <div data-aos="fade-up" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Nama Lengkap -->
                                <div>
                                    <label data-aos="fade-up"
                                        class="block text-sm font-medium text-gray-700 font-poppins">Nama Lengkap</label>
                                    <input type="text" name="nama" data-aos="fade-up"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        placeholder="Sesuai KTP" value="{{ old('nama') }}" required>
                                </div>

                                <!-- Jenis Kelamin -->
                                <div>
                                    <label data-aos="fade-up"
                                        class="block text-sm font-medium text-gray-700 font-poppins">Jenis
                                        Kelamin</label>
                                    <div data-aos="fade-up" class="mt-2 flex gap-4">
                                        <label data-aos="fade-up" class="inline-flex items-center">
                                            <input type="radio" name="jk" value="L" data-aos="fade-up"
                                                class="form-radio text-primary" {{ old('jk') == 'L' ? 'checked' : '' }}
                                                required>
                                            <span data-aos="fade-up" class="ml-2 font-poppins">Laki-laki</span>
                                        </label>
                                        <label data-aos="fade-up" class="inline-flex items-center">
                                            <input type="radio" name="jk" value="P" data-aos="fade-up"
                                                class="form-radio text-primary" {{ old('jk') == 'P' ? 'checked' : '' }}
                                                required>
                                            <span data-aos="fade-up" class="ml-2 font-poppins">Perempuan</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Pilih Kampus -->
                            <div data-aos="fade-up" class="mt-6">
                                <label data-aos="fade-up"
                                    class="block text-sm font-medium text-gray-700 font-poppins">Pilih Kampus</label>
                                <select name="kampus" data-aos="fade-up"
                                    class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                    required>
                                    <option value="">-- Pilih Kampus --</option>
                                    <option value="STIE Muliadarma Pratama"
                                        {{ old('kampus') == 'STIE Muliadarma Pratama' ? 'selected' : '' }}>STIE Muliadarma Pratama
                                    </option>
                                    <option value="AKUBANK Muliadarma Pratama"
                                        {{ old('kampus') == 'AKUBANK Muliadarma Pratama' ? 'selected' : '' }}>AKUBANK Muliadarma Pratama
                                    </option>
                                </select>
                            </div>

                            <!-- Alamat -->
                            <div data-aos="fade-up" class="mt-6">
                                <label data-aos="fade-up"
                                    class="block text-sm font-medium text-gray-700 font-poppins">Alamat</label>
                                <input type="text" name="alamat_ktp" data-aos="fade-up"
                                    class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                    placeholder="Sesuai KTP" value="{{ old('alamat_ktp') }}" required>
                            </div>

                            <!-- Alamat Domisili -->
                            <div data-aos="fade-up" class="mt-6">
                                <label data-aos="fade-up"
                                    class="block text-sm font-medium text-gray-700 font-poppins">Alamat Domisili</label>
                                <input type="text" name="alamat_dom" data-aos="fade-up"
                                    class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                    placeholder="Alamat Domisili" value="{{ old('alamat_dom') }}">
                            </div>
                            <input type="hidden" name="kelas" value="{{ $kelas }}">
                            <!-- Tempat dan Tanggal Lahir -->
                            <div data-aos="fade-up" class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                                <div>
                                    <label data-aos="fade-up"
                                        class="block text-sm font-medium text-gray-700 font-poppins">Tempat Lahir</label>
                                    <input type="text" name="tmpt_lahir" data-aos="fade-up"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        value="{{ old('tmpt_lahir') }}" required>
                                </div>
                                <div>
                                    <label data-aos="fade-up"
                                        class="block text-sm font-medium text-gray-700 font-poppins">Tanggal
                                        Lahir</label>
                                    <input type="date" name="tgl_lahir" data-aos="fade-up"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        value="{{ old('tgl_lahir') }}" required>
                                </div>
                                <div>
                                    <label data-aos="fade-up"
                                        class="block text-sm font-medium text-gray-700 font-poppins">Nomor KTP</label>
                                    <input type="text" name="ktp" data-aos="fade-up"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        value="{{ old('ktp') }}" required>
                                </div>
                            </div>

                            <!-- Kontak -->
                            <div data-aos="fade-up" class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                <div>
                                    <label data-aos="fade-up"
                                        class="block text-sm font-medium text-gray-700 font-poppins">Nomor WhatsApp /
                                        HP</label>
                                    <input type="text" name="no_wa" data-aos="fade-up"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        value="{{ old('no_wa') }}" required>
                                </div>
                                <div>
                                    <label data-aos="fade-up"
                                        class="block text-sm font-medium text-gray-700 font-poppins">Nomor HP Orang
                                        Tua</label>
                                    <input type="text" name="no_hp" data-aos="fade-up"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        value="{{ old('no_hp') }}">
                                </div>
                            </div>

                            <!-- Email -->
                            <div data-aos="fade-up" class="mt-6">
                                <label data-aos="fade-up"
                                    class="block text-sm font-medium text-gray-700 font-poppins">Email</label>
                                <input type="email" name="email" data-aos="fade-up"
                                    class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                    value="{{ old('email') }}" required>
                            </div>

                            <!-- Agama -->
                            <div data-aos="fade-up" class="mt-6">
                                <label data-aos="fade-up"
                                    class="block text-sm font-medium text-gray-700 font-poppins">Agama</label>
                                <select name="agama" data-aos="fade-up"
                                    class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                    required>
                                    <option value="">-- Pilih Agama --</option>
                                    <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen
                                    </option>
                                    <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik
                                    </option>
                                    <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                    <option value="Buddha" {{ old('agama') == 'Buddha' ? 'selected' : '' }}>Buddha
                                    </option>
                                    <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu
                                    </option>
                                    <option value="Protestan" {{ old('agama') == 'Protestan' ? 'selected' : '' }}>
                                        Protestan</option>
                                    <option value="Lainnya" {{ old('agama') == 'Lainnya' ? 'selected' : '' }}>Lainnya
                                    </option>
                                </select>
                            </div>

                            <!-- Nama Orang Tua -->
                            <div data-aos="fade-up" class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                <div>
                                    <label data-aos="fade-up"
                                        class="block text-sm font-medium text-gray-700 font-poppins">Nama Ibu</label>
                                    <input type="text" name="ibu" data-aos="fade-up"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        value="{{ old('ibu') }}" required>
                                </div>
                                <div>
                                    <label data-aos="fade-up"
                                        class="block text-sm font-medium text-gray-700 font-poppins">Nama Ayah</label>
                                    <input type="text" name="ayah" data-aos="fade-up"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        value="{{ old('ayah') }}">
                                </div>
                            </div>

                            <!-- Pendidikan -->
                            <div data-aos="fade-up" class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                <div>
                                    <label data-aos="fade-up"
                                        class="block text-sm font-medium text-gray-700 font-poppins">Asal Sekolah /
                                        Universitas</label>
                                    <input type="text" name="sekolah" data-aos="fade-up"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        value="{{ old('sekolah') }}" required>
                                </div>
                                <div>
                                    <label data-aos="fade-up"
                                        class="block text-sm font-medium text-gray-700 font-poppins">Jurusan yang
                                        Diambil</label>
                                    <select name="jurusan" data-aos="fade-up"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        required>
                                        <option value="">-- Pilih Jurusan --</option>
                                        <option value="D3 Keuangan dan Perbankan"
                                            {{ old('jurusan') == 'D3 Keuangan dan Perbankan' ? 'selected' : '' }}>D3 Keuangan dan Perbankan
                                        </option>
                                        
                                        <option value="S1 Manajemen"
                                            {{ old('jurusan') == 'S1 Manajemen' ? 'selected' : '' }}>S1 Manajemen</option>
                                        <option value="S1 Akuntansi"
                                            {{ old('jurusan') == 'S1 Akuntansi' ? 'selected' : '' }}>S1 Akuntansi</option>
                                        
                                    </select>
                                </div>
                            </div>

                            <div data-aos="fade-up" class="form-group mt-6">
                                <label for="lulusan" data-aos="fade-up"
                                    class="block text-sm font-medium text-gray-700 font-poppins">Lulusan</label>
                                <select name="lulusan" id="lulusan" data-aos="fade-up"
                                    class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary"
                                    required>
                                    <option value="" disabled {{ old('lulusan') === null ? 'selected' : '' }}>--
                                        Pilih Lulusan --</option>
                                    <option value="SMA/MA/SMK/Sederajat"
                                        {{ old('lulusan') === 'SMA/MA/SMK/Sederajat' ? 'selected' : '' }}>
                                        SMA/MA/SMK/Sederajat</option>
                                    <option value="D3/Sederajat"
                                        {{ old('lulusan') === 'D3/Sederajat' ? 'selected' : '' }}>D3/Sederajat</option>
                                    <option value="Paket C" {{ old('lulusan') === 'Paket C' ? 'selected' : '' }}>Paket C
                                    </option>
                                    <option value="S1/D4/Sederajat"
                                        {{ old('lulusan') === 'S1/D4/Sederajat' ? 'selected' : '' }}>
                                        S1/D4/Sederajat</option>
                                </select>
                                @error('lulusan')
                                    <p data-aos="fade-up" class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>


                            <!-- Jaket Almamater -->
                            <div data-aos="fade-up" class="mt-6">
                                <label data-aos="fade-up"
                                    class="block text-sm font-medium text-gray-700 font-poppins">Ukuran Jaket
                                    Almamater</label>
                                <select name="jaket" data-aos="fade-up"
                                    class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                    required>
                                    <option value="">-- Pilih Ukuran --</option>
                                    <option value="S" {{ old('jaket') == 'S' ? 'selected' : '' }}>S</option>
                                    <option value="M" {{ old('jaket') == 'M' ? 'selected' : '' }}>M</option>
                                    <option value="L" {{ old('jaket') == 'L' ? 'selected' : '' }}>L</option>
                                    <option value="XL" {{ old('jaket') == 'XL' ? 'selected' : '' }}>XL</option>
                                    <option value="XXL" {{ old('jaket') == 'XXL' ? 'selected' : '' }}>XXL</option>
                                </select>
                            </div>

                            <div data-aos="fade-up" class="mt-6">
                                <label data-aos="fade-up"
                                    class="block text-sm font-medium text-gray-700 font-dmsans">Biaya Kuliah</label>
                                <div data-aos="fade-up" class="mt-2 flex items-center space-x-4">
                                    <label data-aos="fade-up" class="inline-flex items-center">
                                        <input type="radio" name="biaya" value="Bulanan" data-aos="fade-up"
                                            class="form-radio text-primary focus:ring-accent focus:border-accent"
                                            {{ old('biaya') == 'Bulanan' ? 'checked' : '' }} required>
                                        <span data-aos="fade-up" class="ml-2 font-dmsans">Bulanan</span>
                                    </label>
                                    <label data-aos="fade-up" class="inline-flex items-center">
                                        <input type="radio" name="biaya" value="Semesteran" data-aos="fade-up"
                                            class="form-radio text-primary focus:ring-accent focus:border-accent"
                                            {{ old('biaya') == 'Semesteran' ? 'checked' : '' }} required>
                                        <span data-aos="fade-up" class="ml-2 font-dmsans">Semesteran</span>
                                    </label>
                                </div>
                            </div>


                            <!-- Informasi -->
                            <div data-aos="fade-up" class="mt-6">
                                <label data-aos="fade-up"
                                    class="block text-sm font-medium text-gray-700 font-poppins">Sumber Informasi
                                    Mengetahui Kampus</label>
                                <select name="info" data-aos="fade-up"
                                    class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                    required>
                                    <option value="">-- Pilih Info --</option>
                                    <option value="Facebook" {{ old('info') == 'Facebook' ? 'selected' : '' }}>Facebook
                                    </option>
                                    <option value="Instagram" {{ old('info') == 'Instagram' ? 'selected' : '' }}>Instagram
                                    </option>
                                    <option value="Tiktok" {{ old('info') == 'Tiktok' ? 'selected' : '' }}>Tiktok</option>
                                    <option value="Google" {{ old('info') == 'Google' ? 'selected' : '' }}>Google</option>
                                    <option value="Brosur" {{ old('info') == 'Brosur' ? 'selected' : '' }}>Brosur</option>
                                    <option value="Datang Langsung"
                                        {{ old('info') == 'Datang Langsung' ? 'selected' : '' }}>Datang Langsung</option>
                                    <option value="Teman/Keluarga"
                                        {{ old('info') == 'Teman/Keluarga' ? 'selected' : '' }}>Teman/Keluarga</option>
                                    <option value="SGS (Student Get Student)"
                                        {{ old('info') == 'SGS (Student Get Student)' ? 'selected' : '' }}>
                                        SGS (Student Get Student)</option>
                                    <option value="Agency" {{ old('info') == 'Agency' ? 'selected' : '' }}>Agency</option>
                                </select>
                            </div>


                            <div data-aos="fade-up"
                                class="p-4 bg-accent/20 border-l-4 border-accent text-secondary rounded-lg mt-4">
                                <p data-aos="fade-up" class="text-sm font-dmsans font-medium">(KOSONGKAN FORMULIR DI BAWAH
                                    INI JIKA BELUM
                                    BEKERJA)</p>
                            </div>

                            <div data-aos="fade-up" class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                <!-- Nama Perusahaan -->
                                <div>
                                    <label data-aos="fade-up"
                                        class="block text-sm font-medium text-gray-700 font-poppins">Nama
                                        Perusahaan</label>
                                    <input type="text" name="kerja" data-aos="fade-up"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        placeholder="Nama Perusahaan" value="{{ old('kerja') }}">
                                </div>

                                <!-- Alamat Perusahaan -->
                                <div>
                                    <label data-aos="fade-up"
                                        class="block text-sm font-medium text-gray-700 font-poppins">Alamat
                                        Perusahaan</label>
                                    <input type="text" name="al_kerja" data-aos="fade-up"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        placeholder="Alamat Perusahaan" value="{{ old('al_kerja') }}">
                                </div>
                            </div>

                            <div class="form-group text-center mt-6">
                                <div class="g-recaptcha" data-sitekey="your-site-key"></div>
                                @error('g-recaptcha-response')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div data-aos="fade-up" class="mt-8 text-center">
                                <button type="submit" data-aos="fade-up"
                                    class="w-full md:w-1/2 bg-primary text-white py-3 rounded-lg hover:bg-accent transition">
                                    DAFTAR SEKARANG
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

<style>
    #error-alert {
        animation: fadeOut 10s forwards;
    }

    @keyframes fadeOut {
        to {
            opacity: 0;
            visibility: hidden;
        }
    }
</style>
