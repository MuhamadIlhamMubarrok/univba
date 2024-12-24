@extends('Frontend.Layouts.app2')
@section('content')
    <x-header-section-page title="{{ $page->judul }}" breadcrumb-home="Home" breadcrumb-current="{{ $page->judul }}" />

    <!-- Content Section -->
    <div data-aos="fade-up" class=" py-12 mt-8">
        <div data-aos="fade-up" class="container mx-auto px-4 lg:px-16">
            <div data-aos="fade-up" class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div data-aos="fade-up" class="md:col-span-2 bg-white shadow-xl rounded-lg p-6">
                    <section>
                        <div id="text-page" data-aos="fade-up" class="text-gray-700 font-dmsans leading-relaxed">
                            {!! $page->isi !!} <!-- Render the 'isi' content as HTML -->
                        </div>
                    </section>
                </div>

                <!-- Sidebar (Optional) -->
                <div data-aos="fade-up" class="hidden md:block bg-white shadow-xl rounded-lg p-6">
                    <h3 data-aos="fade-up" class="text-xl font-poppins font-bold text-primary mb-4">Informasi Lainnya</h3>
                    <ul data-aos="fade-up" class="space-y-2 text-gray-600 font-dmsans">
                        <li><a href="/sejarah-singkat" data-aos="fade-up" class="hover:text-accent">Tentang UPY</a></li>
                        <li><a href="/page/14" data-aos="fade-up" class="hover:text-accent">Program Studi</a></li>
                        <li><a href="/pendaftaran" data-aos="fade-up" class="hover:text-accent">Pendaftaran</a></li>
                        <li><a href="/kontak-form" data-aos="fade-up" class="hover:text-accent">Kontak Kami</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
