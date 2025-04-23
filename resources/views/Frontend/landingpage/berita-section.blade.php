<div class="flex flex-col bg-contain bg-no-repeat bg-center justify-center px-4 md:px-[200px] my-[80px]"
    style="background-image: url('{{ asset('./images/background/count.png') }}');">
    <div class="  flex flex-col md:items-start justify-center items-center w-full md:w-[40%] w-[100%] mt-4 md:mt-0"
        data-aos="fade-up">

        <x-header-section subtext="BERITA Universitas Banten" subtext-color="#6b7280" title=""
            title-color="#D48B01" />
        <div class="swiper mySwiper mb-[50px] md:w-[1300px] w-full">
            <div class="swiper-wrapper md:space-x-[10px] px-8 pb-8">
                @foreach ($berita as $index => $project)
                    <div class="swiper-slide">
                        <div class="relative bg-[#F9F9F9]/30 shadow-xl rounded-lg  w-[400px] sm:w-[300px] md:w-[350px]">
                            <img src="{{ asset('./storage/berita/' . $project->file_foto) }}"
                                class=" rounded-t-lg h-[300px] w-full object-cover object-center" alt="">
                            <h1
                                class="absolute right-1 top-1 bg-accent p-1 w-[100px] rounded-full font-dmsans font-semibold text-[11px]">
                                {{ $project->tanggal_berita }}
                            </h1>
                            <div class="px-[20px] flex flex-col gap-y-3 pt-[10px] pb-[20px]">
                                <div class="flex flex-row justify-between gap-x-2 items-center">
                                    <h1 class="font-poppins text-primary text-start font-bold text-[14px] uppercase">
                                        {{ $project->judul }}
                                    </h1>
                                </div>
                                <p class="font-dmsans text-black font-light text-start text-[12px]">
                                    {{ Str::limit(strip_tags($project->content), 100) }}...</p>

                                <div class="mb-3 flex justify-start">
                                    <a href="{{ route('fe-detailberita', $project->id_berita) }}"
                                        class="text-white w-[140px] text-[9px] md:text-[11px] duration-200 md:w-[150px]  font-poppins bg-gradient-to-r from-[#E5C324] to-[#000000] hover:bg-gradient-to-br font-normal rounded-full  px-4 md:px-2 md:pb-[7px] py-2.5 text-center me-2">
                                        BACA SELENGKAPNYA
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
