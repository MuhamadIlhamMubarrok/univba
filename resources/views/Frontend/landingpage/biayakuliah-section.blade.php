<div class=" md:h-full h-auto flex flex-col items-center md:flex-row justify-center md:justify-start py-8 md:py-[100px] px-4 md:px-[200px] md:bg-center bg-right-top bg-cover bg-no-repeat"
    style="background-image: url('{{ asset('./images/background/sambutan.png') }}');">
    <div class="  flex flex-col md:items-start justify-center items-center w-full mt-4 md:mt-0" data-aos="fade-up">

        <x-header-section subtext="BIAYA & JURUSAN" subtext-color="#6b7280"
            title="Biaya dan Jurusan Universitas Kepanjen ( kelas umum )" title-color="#D48B01" />
        <div class="container mx-auto px-4 lg:px-16 py-10 font-poppins">
            <!-- Biaya Formulir -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold text-primary">Biaya Formulir</h2>
                <p class="text-gray-700 mt-2 font-dmsans">Rp. {{ number_format($data['form_fee'], 0, ',', '.') }},-</p>
            </div>

            <!-- Biaya Awal Kuliah -->
            <div class="bg-white p-6 mt-8 rounded-lg shadow-md">
                <h2 class="text-xl font-bold text-primary">Biaya Awal Kuliah Universitas Kepanjen</h2>
                <ul class="list-disc list-inside mt-4">
                    <li class="text-gray-700 font-dmsans"><strong>S1 & D3 :</strong> Rp.
                        {{ number_format($data['initial_fee']['S1D3'], 0, ',', '.') }}</li>
                    <li class="text-gray-700 font-dmsans"><strong>Profesi Ners :</strong> Rp.
                        {{ number_format($data['initial_fee']['ners'], 0, ',', '.') }}</li>
                </ul>
                <p class="text-gray-700 mt-4 italic font-dmsans">
                    Pembayaran Awal Sudah termasuk Angsuran 1 SPP + Jaket Almamater + KTM + PKKMB
                </p>
            </div>

            <!-- Biaya sma ke s1 -->
            <div class="md:bg-gray-50 bg-none md:p-6 mt-8 rounded-lg shadow-md">
                <h2 class="text-xl font-bold text-primary">Daftar Biaya SMA ke S1</h2>
                <div class="overflow-x-auto">
                    <table class="w-full mt-4">
                        <thead style="background-color: red;">
                            <tr class=" text-white">
                                <th class="px-4 py-2 text-center"
                                    style="color: white; padding: 10px; border-top-left-radius: 20px;">Jurusan</th>
                                <th class="px-4 py-2" style="border-top-right-radius: 20px;">Biaya Bulanan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['sma_ke_s1'] as $fee)
                                <tr>
                                    <td class="px-4 py-2 border">{{ $fee['jurusan'] }}</td>
                                    <td class="px-4 py-2 border">Rp. {{ $fee['spp'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Biaya d3 ke s1 -->
            <div class="md:bg-gray-50 bg-none md:p-6 mt-8 rounded-lg shadow-md">
                <h2 class="text-xl font-bold text-primary">Daftar Biaya S1 ke Profesi Ners</h2>
                <div class="overflow-x-auto">
                    <table class="w-full mt-4">
                        <thead style="background-color: red;">
                            <tr class=" text-white">
                                <th class="px-4 py-2 text-center"
                                    style="color: white; padding: 10px; border-top-left-radius: 20px;">Jurusan</th>
                                <th class="px-4 py-2" style="border-top-right-radius: 20px;">Biaya Bulanan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['d3_ke_s1'] as $fee)
                                <tr>
                                    <td class="px-4 py-2 border">{{ $fee['jurusan'] }}</td>
                                    <td class="px-4 py-2 border">Rp. {{ $fee['spp'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div data-aos="fade-up" class="text-center shadow-xl mt-8">
                <div data-aos="fade-up" class="bg-secondary py-8 rounded-lg">
                    <h2 data-aos="fade-up" class="text-xl font-poppins font-bold text-white mb-3">Ubah Masa Depanmu
                        Bersama Universitas Kepanjen
                    </h2>
                    <p data-aos="fade-up" class="text-white font-dmsans mb-5">Tentukan masa depanmu bersama Universitas
                        Al - Irsyad </p>
                    <a href="/pendaftaran" data-aos="fade-up"
                        class="bg-white text-secondary font-poppins font-medium py-2 px-6 rounded-full shadow-md hover:bg-gray-100 transition">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
