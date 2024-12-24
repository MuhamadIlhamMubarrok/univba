@extends('Frontend.Layouts.app2')
@section('content')
    <x-header-section-page title="Contact UPY" breadcrumb-home="Home" breadcrumb-current="Contact Us" />

    <div class="py-10 bg-gray-50 shadow-xl mt-10">
        <div class="container mx-auto px-4 lg:px-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Form Kontak -->
                <div>
                    <h2 class="text-2xl font-poppins font-bold text-blue-900 mb-6">Form Kontak Informasi</h2>
                    <form action="index.php?m=simpan_kontak" method="POST" class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="form-group">
                                <label for="nama" class="block text-sm font-medium text-gray-700 font-poppins">Nama
                                    Lengkap</label>
                                <input type="text" id="nama" name="nama"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="no_hp" class="block text-sm font-medium text-gray-700 font-poppins">Nomor
                                    HP</label>
                                <input type="text" id="no_hp" name="no_hp"
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
                            <div class="g-recaptcha" data-sitekey="6LdVXBQqAAAAAI7s_5HdkCmMIvc5obksttcqDR0k"></div>
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
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-blue-900 mb-4 font-poppins">Alamat Kampus & Sekretariat</h3>
                    <p class="text-gray-600 mb-6 font-dmsans">JL. Melati No.16, Simpang Baru, Kec. Tampan, Kota Pekanbaru,
                        Riau 28292
                    </p>
                    <h3 class="text-xl font-semibold text-blue-900 mb-4 font-poppins">Call & SMS Center</h3>
                    <p class="text-gray-600 font-dmsans">
                        <span class="font-semibold font-poppins">Telepon :</span> 0878-9019-8284<br>
                        <span class="font-semibold font-poppins">Whatsapp :</span> 087818000395
                    </p>
                </div>
            </div>
            <!-- Google Maps -->
            <div class="mt-10">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.670467423746!2d101.37127177363834!3d0.49326166373303937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5aea4794b82b5%3A0xf42c622db0b7fd94!2sAMIK%20Tri%20Dharma%20Pekanbaru!5e0!3m2!1sen!2sus!4v1721459371906!5m2!1sen!2sus"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-md"></iframe>
            </div>
        </div>
    </div>
@endsection
