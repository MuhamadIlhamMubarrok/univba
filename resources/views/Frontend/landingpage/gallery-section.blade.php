<div class=" h-[827px] flex flex-col items-center md:flex-row justify-center md:justify-start px-4 md:px-[200px] md:bg-center bg-right bg-cover bg-no-repeat "
    style="background-image: url('{{ asset('./images/background/sambutan.png') }}');">
    <di class="  flex flex-col md:items-start justify-center items-center w-full md:w-[40%] w-[100%] mt-4 md:mt-0"
        data-aos="fade-up">

        <x-header-section subtext="GALLERY" subtext-color="#6b7280" title="EVENT KAMPUS Mulia Darma Pratama" title-color="#222764" />
        <div class=" swiper mySwiper mb-3 mb-[50px] md:w-[1300px] w-full">
            <div class="swiper-wrapper">
                @foreach ($images as $index => $image)
                    <div class="swiper-slide">
                        <img src="{{ asset('./storage/galleryFoto/' . $image->file) }}" />
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <x-button url="/kegiatan-mahasiswa">GALLERY KAMPUS</x-button>
</div>
</div>
