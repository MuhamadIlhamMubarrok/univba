<div class="flex flex-col bg-contain bg-no-repeat bg bg-center justify-center px-4 md:px-[200px] my-[80px]"
    style="background-image: url('{{ asset('./images/background/count.png') }}');">
    <div class="  flex flex-col md:items-start justify-center items-center w-full md:w-[40%] w-[100%] mt-4 md:mt-0"
        data-aos="fade-up">

        <x-header-section subtext="BERITA" subtext-color="#6b7280" title="BERITA TENTANG UPY" title-color="#222764" />
        <div class="swiper mySwiper">
            <div class="swiper-wrapper space-x-[10px] px-8 pb-8">
                @foreach ($berita as $index => $project)
                    <div class="swiper-slide">
                        <div class="relative bg-[#F9F9F9]/30 shadow-xl rounded-lg  w-full sm:w-[300px] md:w-[350px]">
                            <img src="{{ asset('./storage/berita/' . $project->file_foto) }}"
                                class=" rounded-t-lg h-[175px] w-full object-cover object-center" alt="">
                            <h1
                                class="absolute right-1 top-1 bg-accent p-1 w-[100px] rounded-full font-dmsans font-semibold text-[11px]">
                                {{ $project->tanggal_berita }}
                            </h1>
                            <div class="px-[20px] flex flex-col gap-y-3 pt-[10px] pb-[20px]">
                                <div class="flex flex-row justify-between gap-x-2 items-center">
                                    <h1 class="font-poppins text-primary font-bold text-[20px] uppercase">
                                        {{ $project->judul }}
                                    </h1>
                                </div>
                                <p class="font-dmsans text-black font-light text-start">
                                    {{ Str::limit(strip_tags($project->content), 150) }}...</p>
                                <div class="my-3 flex justify-start">
                                    <a href=""
                                        class="text-accent hover:text-white w-[140px] text-[9px] md:text-[11px] duration-200 md:w-[150px] border border-[2px] border-accent hover:border hover:border-[#F9F9F9]/15 hover:rounded-full hover:border-[2px] font-Anek hover:bg-accent hover:border-accent font-bold rounded-full  px-4 md:px-2 md:py-[7px] py-2.5 text-center me-2 mb-4 md:mb-2">
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
