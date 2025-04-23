@section('title', 'Brosur')

@extends('Frontend.Layouts.app2')

@section('content')
    <x-header-section-page title="Brosur Universitas Banten" breadcrumb-home="Home" breadcrumb-current="Brosur" />

    <div class="py-16">
        <div class="container mx-auto px-4 lg:px-16">
            <!-- Heading -->
            <div class="text-center mb-12">
                <p class="text-gray-600 font-dmsans text-lg">
                    Unduh brosur lengkap Universitas Banten untuk mendapatkan informasi mengenai
                    program
                    studi,
                    fasilitas, dan layanan terbaik yang kami tawarkan.
                </p>
            </div>

            <!-- Brosur Gallery -->
            <div class="flex flex-wrap justify-center gap-8">
                <!-- Brosur Item 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col items-center">
                    <img src="{{ asset('images/brosur/brosur1.jpeg') }}" alt="Brosur Universitas Banten"
                        class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-poppins font-bold text-primary mb-2">Universitas Banten
                            2023</h3>
                        <p class="text-sm text-gray-600 mb-4">Format JPEG</p>
                        <a href="{{ asset('images/brosur/brosur1.jpeg') }}" download
                            class="bg-primary text-white py-2 px-4 rounded-md hover:bg-accent transition">
                            <i class="fas fa-download mr-2"></i>Download
                        </a>
                    </div>
                </div>

                <!-- Brosur Item 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col items-center">
                    <img src="{{ asset('images/brosur/brosur2.jpeg') }}" alt="Brosur Universitas Banten"
                        class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-poppins font-bold text-primary mb-2">Universitas Banten
                            2023</h3>
                        <p class="text-sm text-gray-600 mb-4">Format JPEG</p>
                        <a href="{{ asset('images/brosur/brosur2.jpeg') }}" download
                            class="bg-primary text-white py-2 px-4 rounded-md hover:bg-accent transition">
                            <i class="fas fa-download mr-2"></i>Download
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bagian Unduh Semua -->
            <div class="flex justify-center mt-12">
                <button onclick="downloadAllBrosur()"
                    class="bg-accent text-white py-3 px-6 rounded-md font-poppins font-bold hover:bg-accent transition">
                    <i class="fas fa-download mr-2"></i>Unduh Semua Brosur
                </button>
            </div>
        </div>
    </div>

    <script>
        function downloadAllBrosur() {
            const urls = [
                '{{ asset('images/brosur/brosur1.jpeg') }}',
                '{{ asset('images/brosur/brosur2.jpeg') }}'
            ];

            urls.forEach(url => {
                const link = document.createElement('a');
                link.href = url;
                link.setAttribute('download', '');
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
        }
    </script>
@endsection
