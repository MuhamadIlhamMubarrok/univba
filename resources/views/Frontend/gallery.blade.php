@section('title', $status['title'])
@extends('Frontend.Layouts.app2')

@section('content')
    <x-header-section-page title="{{ $status['title'] }}" breadcrumb-home="Home"
        breadcrumb-current="{{ $status['current'] }}" />

    <div class="py-10 bg-gray-50 shadow-xl mt-10">
        <div class="container mx-auto px-4 lg:px-20 max-w-screen-2xl">
            <section>
                <!-- Gallery Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-8 mt-8">
                    @foreach ($events as $item)
                        <div class="relative group bg-white shadow-md rounded-lg overflow-hidden">
                            <!-- Image -->
                            <a href="{{ asset('./storage/galleryFoto/' . $item->file) }}" target="_blank"
                                class="block w-full h-64 relative">
                                <img src="{{ asset('./storage/galleryFoto/' . $item->file) }}" alt="Gallery Image"
                                    class="w-full h-full object-cover transition duration-300 group-hover:opacity-80">
                                <!-- Hover Overlay -->
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center transition duration-300 group-hover:bg-opacity-50">
                                    <p class="text-white font-medium text-lg hidden group-hover:block">Lihat Gambar</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-8 flex justify-center">
                    {{ $events->links('pagination::tailwind') }}
                </div>
            </section>

            <x-join-us-section title="Bergabunglah Bersama Universitas Banten"
                description="Universitas Banten membuka jalan menuju kesuksesan bisnis! Bergabung dan kembangkan potensimu di dunia usaha."
                buttonText="Daftar Sekarang" />
        </div>
    </div>
@endsection
