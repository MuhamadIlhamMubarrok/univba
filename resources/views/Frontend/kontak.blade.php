@extends('Frontend.Layouts.app2')
@section('content')
    <x-header-section-page title="Contact Mulia Darma Pratama" breadcrumb-home="Home" breadcrumb-current="Contact Us" />

    <div data-aos="fade-up" class="py-10 bg-gray-50 shadow-xl mt-10">
        <div data-aos="fade-up" class="container mx-auto px-4 lg:px-16">
            <div data-aos="fade-up" class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Form Kontak -->
                <div>
                    <h2 data-aos="fade-up" class="text-2xl font-poppins font-bold text-blue-900 mb-6">Form Kontak Informasi
                    </h2>
                    <form action="{{ route('store.fe-kontak') }}" method="POST" data-aos="fade-up" class="space-y-4">
                        @csrf
                        <div data-aos="fade-up" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="form-group">
                                <label for="nama" class="block text-sm font-medium text-gray-700 font-poppins">Nama
                                    Lengkap</label>
                                <input type="text" id="nama" name="nama"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="no_telp" class="block text-sm font-medium text-gray-700 font-poppins">Nomor
                                    HP</label>
                                <input type="text" id="no_telp" name="no_telp"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                    required>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="form-group">
                                <label for="email"
                                    class="block text-sm font-medium text-gray-700 font-poppins">Email</label>
                                <input type="email" id="email" name="email"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="alamat"
                                    class="block text-sm font-medium text-gray-700 font-poppins">Alamat</label>
                                <input type="text" id="alamat" name="alamat"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pesan"
                                class="block text-sm font-medium text-gray-700 font-poppins">Pesan/Saran</label>
                            <textarea id="pesan" name="pesan" rows="5"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                required></textarea>
                        </div>
                        <div class="form-group text-center">
                            <div class="g-recaptcha" data-sitekey="your-site-key" data-theme="dark"></div>
                        </div>
                        <div class="text-center">
                            <button type="submit"
                                class="w-full sm:w-1/2 bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <i class="fa fa-envelope-o"></i> Kirim Pesan
                            </button>
                        </div>
                    </form>

                </div>

                <!-- Informasi Kontak -->
                <div data-aos="fade-up" class="bg-white shadow-md rounded-lg p-6">
                    <h3 data-aos="fade-up" class="text-xl font-semibold text-blue-900 mb-4 font-poppins">Alamat Kampus &
                        Sekretariat</h3>
                    <p data-aos="fade-up" class="text-gray-600 mb-6 font-dmsans">Jl. Jenderal Ahmad Yani No.No, 13 Ulu, Kecamatan Seberang Ulu I, Kota Palembang, Sumatera Selatan 30252
                    </p>
                    <h3 data-aos="fade-up" class="text-xl font-semibold text-blue-900 mb-4 font-poppins">Call & SMS Center
                    </h3>
                    <p data-aos="fade-up" class="text-gray-600 font-dmsans">
                        <span data-aos="fade-up" class="font-semibold font-poppins">Telepon :</span> 0878-9019-8284<br>
                        <span data-aos="fade-up" class="font-semibold font-poppins">Whatsapp :</span> 087818000395
                    </p>
                </div>
            </div>
            <!-- Google Maps -->
            <div data-aos="fade-up" class="mt-10">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31874.945758350063!2d104.778929!3d-2.9951100000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b76207b8e09f5%3A0x515992fe6c741220!2sSTIE%20-%20Akubank%20Mulia%20Darma%20Pratama!5e0!3m2!1sen!2sid!4v1735617351827!5m2!1sen!2sid"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" data-aos="fade-up" class="rounded-lg shadow-md"></iframe>
            </div>
        </div>
    </div>
@endsection
