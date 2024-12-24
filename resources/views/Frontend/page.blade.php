@extends('Frontend.Layouts.app2')
@section('content')
    <x-header-section-page title="{{ $page->judul }}" breadcrumb-home="Home" breadcrumb-current="{{ $page->judul }}" />

    <!-- Content Section -->
    <div class=" py-12 mt-8">
        <div class="container mx-auto px-4 lg:px-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="md:col-span-2 bg-white shadow-xl rounded-lg p-6">
                    <section>
                        <div id="text-page" class="text-gray-700 font-dmsans leading-relaxed">
                            {!! $page->isi !!} <!-- Render the 'isi' content as HTML -->
                        </div>
                    </section>
                </div>

                <!-- Sidebar (Optional) -->
                <div class="hidden md:block bg-white shadow-xl rounded-lg p-6">
                    <h3 class="text-xl font-poppins font-bold text-primary mb-4">Informasi Lainnya</h3>
                    <ul class="space-y-2 text-gray-600 font-dmsans">
                        <li><a href="/sejarah-singkat" class="hover:text-accent">Tentang UPY</a></li>
                        <li><a href="/page/14" class="hover:text-accent">Program Studi</a></li>
                        <li><a href="/pendaftaran" class="hover:text-accent">Pendaftaran</a></li>
                        <li><a href="/kontak-form" class="hover:text-accent">Kontak Kami</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
