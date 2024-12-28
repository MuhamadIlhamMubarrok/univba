@extends('Frontend.Layouts.app2')

@section('content')
    <div class="container mx-auto px-4 lg:px-16 py-10 font-poppins">
        <!-- Biaya Formulir -->
        <div class="bg-gray-50 p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold text-primary">Biaya Formulir</h2>
            <p class="text-gray-700 mt-2 font-dmsans">Rp. {{ number_format($data['form_fee'], 0, ',', '.') }},-</p>
        </div>

        <!-- Biaya Awal Kuliah -->
        <div class="bg-white p-6 mt-8 rounded-lg shadow-md">
            <h2 class="text-xl font-bold text-primary">Biaya Awal Kuliah Universitas Mitra Bangsa</h2>
            <ul class="list-disc list-inside mt-4">
                <li class="text-gray-700 font-dmsans"><strong>S1:</strong> Rp.
                    {{ number_format($data['initial_fee']['S1'], 0, ',', '.') }}</li>
                <li class="text-gray-700 font-dmsans"><strong>S2:</strong> Rp.
                    {{ number_format($data['initial_fee']['S2'], 0, ',', '.') }}</li>
            </ul>
            <p class="text-gray-700 mt-4 italic font-dmsans">
                Pembayaran Biaya Kuliah Dapat Diangsur Bulanan (Biaya Tidak Ada Kenaikan Sampai Lulus Selama Masa Studi)
            </p>
        </div>

        <!-- Biaya S1 -->
        <div class="bg-gray-50 p-6 mt-8 rounded-lg shadow-md">
            <h2 class="text-xl font-bold text-primary">Daftar Biaya S1</h2>
            <div class="overflow-x-auto">
                <table class="w-full mt-4 border border-gray-300">
                    <thead>
                        <tr class="bg-secondary text-white">
                            <th class="px-4 py-2 text-left">Jurusan</th>
                            <th class="px-4 py-2">Gel 1</th>
                            <th class="px-4 py-2">Gel 2</th>
                            <th class="px-4 py-2">Gel 3</th>
                            <th class="px-4 py-2">Semester</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['s1_fees'] as $fee)
                            <tr>
                                <td class="px-4 py-2 border">{{ $fee['jurusan'] }}</td>
                                <td class="px-4 py-2 border">Rp. {{ $fee['gel1'] }}</td>
                                <td class="px-4 py-2 border">Rp. {{ $fee['gel2'] }}</td>
                                <td class="px-4 py-2 border">Rp. {{ $fee['gel3'] }}</td>
                                <td class="px-4 py-2 border">Rp. {{ $fee['semester'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Biaya S2 -->
        <div class="bg-white p-6 mt-8 rounded-lg shadow-md">
            <h2 class="text-xl font-bold text-primary">Daftar Biaya S2</h2>
            <div class="overflow-x-auto">
                <table class="w-full mt-4 border border-gray-300">
                    <thead>
                        <tr class="bg-secondary text-white">
                            <th class="px-4 py-2 text-left">Jurusan</th>
                            <th class="px-4 py-2">Semester</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['s2_fees'] as $fee)
                            <tr>
                                <td class="px-4 py-2 border">{{ $fee['jurusan'] }}</td>
                                <td class="px-4 py-2 border">Rp. {{ $fee['semester'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div data-aos="fade-up" class="text-center shadow-xl mt-8">
            <div data-aos="fade-up" class="bg-secondary py-8 rounded-lg">
                <h2 data-aos="fade-up" class="text-xl font-poppins font-bold text-white mb-3">Ubah Masa Depanmu Bersama UPY
                </h2>
                <p data-aos="fade-up" class="text-white font-dmsans mb-5">Tentukan masa depanmu bersama Universitas PGRI
                    Yogyakarta </p>
                <a href="/pendaftaran" data-aos="fade-up"
                    class="bg-white text-secondary font-poppins font-medium py-2 px-6 rounded-full shadow-md hover:bg-gray-100 transition">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
@endsection
