@extends('Frontend.Layouts.app2')

@section('content')
    <x-header-section-page title="Konfirmasi Pendaftaran Mulia Darma" breadcrumb-home="Home"
        breadcrumb-current="Konfirmasi Pendaftaran" />

    <div class="bg-gray-50 py-10">
        <div class="container mx-auto px-4 lg:px-20 max-w-screen-lg">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden border-t-4 border-primary">
                <!-- Header -->
                <div class="bg-primary text-white p-6 text-center">
                    <h1 class="text-2xl font-poppins font-bold">Terima Kasih Telah Mendaftar</h1>
                    <p class="text-sm mt-2 font-dmsans">
                        Kami telah mengirimkan email konfirmasi ke alamat Anda. Silakan periksa Inbox atau folder Spam.
                    </p>
                </div>

                <!-- Body Content -->
                <div class="p-8 font-dmsans text-primary">
                    <!-- Nomor Pendaftaran -->
                    <div class="text-center mb-6">
                        <p class="text-lg font-poppins">Nomor Pendaftaran Anda:</p>
                        <p class="text-3xl font-bold text-accent">PO_{{ $registration->daftar_id }}</p>
                    </div>

                    <!-- Informasi Biaya -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold font-poppins">Informasi Biaya Pendaftaran:</h3>
                        <ul class="list-disc list-inside text-sm mt-2">
                            <li><strong>D3:</strong> Rp. 150.000,-</li>
                            <li><strong>S1:</strong> Rp. 150.000,-</li>
                        </ul>
                    </div>

                    <!-- Pembayaran -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold font-poppins">Rekening Pembayaran:</h3>
                        <p class="mt-2 text-sm">
                            <strong>Bank BNI</strong><br>
                            No Rekening: <strong>8282823886</strong><br>
                            a.n. <strong>Edukasi Indonesia Jaya</strong>
                        </p>
                    </div>

                    <!-- Cara Konfirmasi -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold font-poppins">Cara Konfirmasi Pembayaran:</h3>
                        <div class="bg-gray-100 p-4 rounded-lg mt-2">
                            <p class="text-sm font-medium">1. Simpan bukti transfer Anda.</p>
                            <p class="text-sm font-medium mt-2">2. Pilih salah satu cara konfirmasi:</p>
                            <ul class="list-disc list-inside mt-2 text-sm">
                                <li>
                                    <a href="https://api.whatsapp.com/send?phone=6287890198284&text=Halo%20Admin%20Saya%20Sudah%20Daftar%20Online%20di%20Mulia Darma Pratama."
                                        target="_blank" class="text-accent hover:underline font-semibold">
                                        Konfirmasi Via WhatsApp
                                    </a>
                                </li>
                                <li>Hubungi petugas di kampus.</li>
                            </ul>
                        </div>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold font-poppins">Cetak Formulir Pendaftaran:</h3>
                            <div class="bg-gray-100 p-4 rounded-lg mt-2">
                                <form method="POST" action="app/formulir.php" class="flex items-center justify-between">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $registration->daftar_id }}">
                                    <p class="text-sm font-medium">Klik tombol di bawah ini untuk mencetak formulir
                                        pendaftaran Anda.</p>
                                    <a
                                        class="bg-primary text-white text-sm font-poppins py-2 px-4 rounded-lg shadow-md hover:bg-accent transition">
                                        Cetak Formulir
                                    </a>
                                </form>
                            </div>
                        </div>

                    </div>

                    <!-- Wawancara -->
                    <div class="text-center mt-6">
                        <p class="text-sm font-dmsans">
                            Kami akan menghubungi Anda untuk wawancara melalui nomor WhatsApp:
                            <span class="font-semibold text-accent">{{ $registration->no_wa }}</span>
                        </p>
                    </div>
                </div>

                <!-- Footer -->
                <div class="bg-gray-100 p-6 text-center">
                    <img src="{{ asset('./images/logo/footer-muliadarma.png') }}" alt="Mulia Darma Pratama" class="mx-auto w-32 mb-4">
                    <p class="text-sm font-poppins text-gray-600">Mulia Darma Pratama</p>
                </div>
            </div>
        </div>
    </div>
@endsection
