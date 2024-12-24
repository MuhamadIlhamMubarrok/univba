@extends('Frontend.Layouts.app2')

@section('content')
    <x-header-section-page title="Daftar Online UPY" breadcrumb-home="Home" breadcrumb-current="Daftar Online" />

    <!-- Step 1 -->
    @if ($step == 1)
        <div class="py-10 bg-gray-50">
            <div class="container mx-auto px-4 lg:px-20 max-w-screen-lg">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <!-- Header -->
                    <div class="bg-primary text-white p-6 text-center">
                        <h2 class="text-2xl font-poppins font-semibold">Pilih Kelas</h2>
                        <p class="text-sm mt-2 font-dmsans">Pilih kelas yang sesuai untuk memulai proses pendaftaran</p>
                    </div>
                    <!-- Form -->
                    <div class="p-6">
                        <form method="get" action="{{ route('registration.show') }}">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Kelas Karyawan -->
                                <label
                                    class="relative block p-4 border border-primary rounded-lg shadow-md hover:shadow-lg transition cursor-pointer peer-checked:ring-2 peer-checked:ring-accent peer-checked:ring-offset-2">
                                    <input type="radio" name="kelas" value="Kelas Karyawan" class="hidden peer"
                                        required>
                                    <!-- Checklist Icon -->
                                    <div
                                        class="absolute top-3 right-3 hidden peer-checked:block bg-accent text-white w-8 h-8 rounded-full flex items-center justify-center">
                                        <i class="fa-solid fa-circle-check text-white"></i>
                                    </div>
                                    <div class="text-center">
                                        <h3 class="text-lg font-poppins text-primary peer-checked:text-accent">Kelas
                                            Karyawan</h3>
                                        <p
                                            class="text-sm text-gray-500 peer-checked:text-gray-700 font-poppins font-dmsans">
                                            Pilihan
                                            untuk karyawan yang ingin melanjutkan pendidikan.</p>
                                    </div>
                                </label>

                                <!-- Kelas Reguler Pagi -->
                                <label
                                    class="relative block p-4 border border-primary rounded-lg shadow-md hover:shadow-lg transition cursor-pointer peer-checked:ring-2 peer-checked:ring-accent peer-checked:ring-offset-2">
                                    <input type="radio" name="kelas" value="Kelas Reguler Pagi" class="hidden peer"
                                        required>
                                    <!-- Checklist Icon -->
                                    <div
                                        class="absolute top-3 right-3 hidden peer-checked:block bg-accent text-white w-8 h-8 rounded-full flex items-center justify-center">
                                        <i class="fa-solid fa-circle-check text-white"></i>
                                    </div>
                                    <div class="text-center">
                                        <h3 class="text-lg font-poppins text-primary peer-checked:text-accent">Kelas
                                            Reguler Pagi</h3>
                                        <p
                                            class="text-sm text-gray-500 peer-checked:text-gray-700 font-poppins font-dmsans">
                                            Pilihan
                                            kelas reguler untuk mahasiswa baru.</p>
                                    </div>
                                </label>
                            </div>
                            <!-- Submit Button -->
                            <div class="mt-6 text-center">
                                <input type="hidden" name="step" value="2">
                                <button type="submit"
                                    class="w-full md:w-1/2 bg-primary text-white py-3 rounded-lg hover:bg-accent transition">
                                    SELANJUTNYA <i class="fa fa-chevron-right ml-2"></i>
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
        <div class="py-10 bg-gray-50">

            <div class="container mx-auto px-4 lg:px-20 max-w-screen-lg">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <!-- Header -->
                    <div class="bg-primary text-white p-6 text-center">
                        <h2 class="text-2xl font-poppins font-semibold">Formulir Pendaftaran</h2>
                        <p class="text-sm mt-2 font-dmsans">Lengkapi data Anda untuk melanjutkan proses pendaftaran</p>
                    </div>
                    <!-- Form -->
                    <div class="p-6">
                        <form method="post" action="{{ route('registration.store') }}">
                            @if ($errors->any())
                                <div class="p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-lg">
                                    <p class="text-sm font-dmsans font-medium"><strong>Terjadi Kesalahan!</strong></p>
                                    <ul class="list-disc pl-6 text-sm font-dmsans">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Nama Lengkap -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 font-poppins">Nama Lengkap</label>
                                    <input type="text" name="nama"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        placeholder="Sesuai KTP" value="{{ old('nama') }}" required>
                                </div>

                                <!-- Jenis Kelamin -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 font-poppins">Jenis
                                        Kelamin</label>
                                    <div class="mt-2 flex gap-4">
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="jk" value="L"
                                                class="form-radio text-primary" {{ old('jk') == 'L' ? 'checked' : '' }}
                                                required>
                                            <span class="ml-2 font-poppins">Laki-laki</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="jk" value="P"
                                                class="form-radio text-primary" {{ old('jk') == 'P' ? 'checked' : '' }}
                                                required>
                                            <span class="ml-2 font-poppins">Perempuan</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Pilih Kampus -->
                            <div class="mt-6">
                                <label class="block text-sm font-medium text-gray-700 font-poppins">Pilih Kampus</label>
                                <select name="kampus"
                                    class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                    required>
                                    <option value="">-- Pilih Kampus --</option>
                                    <option value="Kampus A" {{ old('kampus') == 'Kampus A' ? 'selected' : '' }}>Kampus A
                                    </option>
                                    <option value="Kampus B" {{ old('kampus') == 'Kampus B' ? 'selected' : '' }}>Kampus B
                                    </option>
                                </select>
                            </div>

                            <!-- Alamat -->
                            <div class="mt-6">
                                <label class="block text-sm font-medium text-gray-700 font-poppins">Alamat</label>
                                <input type="text" name="alamat_ktp"
                                    class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                    placeholder="Sesuai KTP" value="{{ old('alamat_ktp') }}" required>
                            </div>

                            <!-- Alamat Domisili -->
                            <div class="mt-6">
                                <label class="block text-sm font-medium text-gray-700 font-poppins">Alamat Domisili</label>
                                <input type="text" name="alamat_dom"
                                    class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                    placeholder="Alamat Domisili" value="{{ old('alamat_dom') }}">
                            </div>
                            <input type="hidden" name="kelas" value="{{ $kelas }}">
                            <!-- Tempat dan Tanggal Lahir -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 font-poppins">Tempat Lahir</label>
                                    <input type="text" name="tmpt_lahir"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        value="{{ old('tmpt_lahir') }}" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 font-poppins">Tanggal
                                        Lahir</label>
                                    <input type="date" name="tgl_lahir"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        value="{{ old('tgl_lahir') }}" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 font-poppins">Nomor KTP</label>
                                    <input type="text" name="ktp"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        value="{{ old('ktp') }}" required>
                                </div>
                            </div>

                            <!-- Kontak -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 font-poppins">Nomor WhatsApp /
                                        HP</label>
                                    <input type="text" name="no_wa"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        value="{{ old('no_wa') }}" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 font-poppins">Nomor HP Orang
                                        Tua</label>
                                    <input type="text" name="no_hp"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        value="{{ old('no_hp') }}">
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="mt-6">
                                <label class="block text-sm font-medium text-gray-700 font-poppins">Email</label>
                                <input type="email" name="email"
                                    class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                    value="{{ old('email') }}" required>
                            </div>

                            <!-- Agama -->
                            <div class="mt-6">
                                <label class="block text-sm font-medium text-gray-700 font-poppins">Agama</label>
                                <select name="agama"
                                    class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                    required>
                                    <option value="">-- Pilih Agama --</option>
                                    <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen
                                    </option>
                                </select>
                            </div>

                            <!-- Nama Orang Tua -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 font-poppins">Nama Ibu</label>
                                    <input type="text" name="ibu"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        value="{{ old('ibu') }}" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 font-poppins">Nama Ayah</label>
                                    <input type="text" name="ayah"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        value="{{ old('ayah') }}">
                                </div>
                            </div>

                            <!-- Pendidikan -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 font-poppins">Asal Sekolah /
                                        Universitas</label>
                                    <input type="text" name="sekolah"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        value="{{ old('sekolah') }}" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 font-poppins">Jurusan yang
                                        Diambil</label>
                                    <select name="jurusan"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        required>
                                        <option value="">-- Pilih Jurusan --</option>
                                        <option value="S1 Manajemen"
                                            {{ old('jurusan') == 'S1 Manajemen' ? 'selected' : '' }}>S1 Manajemen</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group mt-6">
                                <label for="lulusan"
                                    class="block text-sm font-medium text-gray-700 font-poppins">Lulusan</label>
                                <select name="lulusan" id="lulusan"
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
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>


                            <!-- Jaket Almamater -->
                            <div class="mt-6">
                                <label class="block text-sm font-medium text-gray-700 font-poppins">Ukuran Jaket
                                    Almamater</label>
                                <select name="jaket"
                                    class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                    required>
                                    <option value="">-- Pilih Ukuran --</option>
                                    <option value="S" {{ old('jaket') == 'S' ? 'selected' : '' }}>S</option>
                                    <option value="M" {{ old('jaket') == 'M' ? 'selected' : '' }}>M</option>
                                    <option value="L" {{ old('jaket') == 'L' ? 'selected' : '' }}>L</option>
                                </select>
                            </div>

                            <div class="mt-6">
                                <label class="block text-sm font-medium text-gray-700 font-dmsans">Biaya Kuliah</label>
                                <div class="mt-2 flex items-center space-x-4">
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="biaya" value="Bulanan"
                                            class="form-radio text-primary focus:ring-accent focus:border-accent"
                                            {{ old('biaya') == 'Bulanan' ? 'checked' : '' }} required>
                                        <span class="ml-2 font-dmsans">Bulanan</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="biaya" value="Semesteran"
                                            class="form-radio text-primary focus:ring-accent focus:border-accent"
                                            {{ old('biaya') == 'Semesteran' ? 'checked' : '' }} required>
                                        <span class="ml-2 font-dmsans">Semesteran</span>
                                    </label>
                                </div>
                            </div>


                            <!-- Informasi -->
                            <div class="mt-6">
                                <label class="block text-sm font-medium text-gray-700 font-poppins">Sumber Informasi
                                    Mengetahui
                                    Kampus</label>
                                <select name="info"
                                    class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                    required>
                                    <option value="">-- Pilih Info --</option>
                                    <option value="Teman" {{ old('info') == 'Teman' ? 'selected' : '' }}>Teman</option>
                                    <option value="Google" {{ old('info') == 'Google' ? 'selected' : '' }}>Google</option>
                                </select>
                            </div>

                            <div class="p-4 bg-accent/20 border-l-4 border-accent text-secondary rounded-lg mt-4">
                                <p class="text-sm font-dmsans font-medium">(KOSONGKAN FORMULIR DI BAWAH INI JIKA BELUM
                                    BEKERJA)</p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                                <!-- Nama Perusahaan -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 font-poppins">Nama
                                        Perusahaan</label>
                                    <input type="text" name="kerja"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        placeholder="Nama Perusahaan" value="{{ old('kerja') }}">
                                </div>

                                <!-- Alamat Perusahaan -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 font-poppins">Alamat
                                        Perusahaan</label>
                                    <input type="text" name="al_kerja"
                                        class="mt-1 p-3 border border-gray-300 rounded-lg w-full focus:ring-primary focus:border-primary"
                                        placeholder="Alamat Perusahaan" value="{{ old('al_kerja') }}">
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="mt-8 text-center">
                                <button type="submit"
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
