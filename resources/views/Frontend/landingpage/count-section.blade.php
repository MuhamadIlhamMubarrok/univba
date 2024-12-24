<div class="flex flex-col bg-contain bg-no-repeat bg bg-center justify-center px-4 md:px-[200px] my-[80px]"
    data-aos="fade-up" style="background-image: url('{{ asset('./images/background/count.png') }}');">
    <div class="flex flex-row justify-start items-center gap-x-4">
        <div class="border-[1px] rounded-full border-[custom-gradient-text] w-[25px] md:w-[50px] my-[15px] md:my-[25px]">
        </div>
        <h1 class="font-dmsans text-gray-500 text-xl font">TRACK RECORD</h1>
    </div>
    <h1
        class="font-Anek text-[24px] md:text-[32px] custom-gradient-text font-semibold mb-4 uppercase font-poppins text-primary">
        APA YANG UPY PUNYA
    </h1>
    <div class="relative flex flex-col md:flex-row md:gap-x-[100px] gap-y-4 md:gap-y-0 py-[30px]">
        <div
            class="flex flex-col shadow-2xl justify-center items-center bg-[#F9F9F9]/15 shadow-custom-thick rounded-[16px] px-[20px] pt-[20px] pb-[40px] md:pb-[80px] md:w-[400px]">
            <h1 id="count-10"
                class="font-inter custom-gradient-text text-accent text-[48px] md:text-[96px] font-extrabold font-poppins"
                data-count="10">
                10</h1>
            <h1 class="font-poppins font-bold text-primary text-[16px] md:text-[24px] uppercase custom-gradient-text">
                dosen upy</h1>
            <p class="font-dmsans text-justify text-black text-sm md:text-base">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Ab, eveniet? Totam assumenda cum itaque qui nesciunt error magnam voluptatum
                dignissimos!</p>
        </div>
        <div
            class="flex flex-col shadow-2xl justify-center items-center bg-[#F9F9F9]/15 shadow-custom-thick rounded-[16px] px-[20px] pt-[20px] pb-[40px] md:pb-[80px] md:w-[400px]">
            <h1 id="count-10"
                class="font-inter custom-gradient-text text-accent text-[48px] md:text-[96px] font-extrabold font-poppins"
                data-count="10">
                10</h1>
            <h1 class="font-poppins font-bold text-primary text-[16px] md:text-[24px] uppercase custom-gradient-text">
                mahasiswa aktif</h1>
            <p class="font-dmsans text-justify text-black text-sm md:text-base">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Ab, eveniet? Totam assumenda cum itaque qui nesciunt error magnam voluptatum
                dignissimos!</p>
        </div>
        <div
            class="flex flex-col shadow-2xl justify-center items-center bg-[#F9F9F9]/15 shadow-custom-thick rounded-[16px] px-[20px] pt-[20px] pb-[40px] md:pb-[80px] md:w-[400px]">
            <h1 id="count-10"
                class="font-inter custom-gradient-text text-accent text-[48px] md:text-[96px] font-extrabold font-poppins"
                data-count="10">
                10</h1>
            <h1 class="font-poppins font-bold text-primary text-[16px] md:text-[24px] uppercase custom-gradient-text">
                mahasiswa lulus</h1>
            <p class="font-dmsans text-justify text-black text-sm md:text-base">Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Ab, eveniet? Totam assumenda cum itaque qui nesciunt error magnam voluptatum
                dignissimos!</p>
        </div>
    </div>

    <div class="flex items-center justify-center">
        <a href="/our-client"
            class="text-accent hover:text-white w-[180px] duration-200 md:w-[240px] border border-[2px] border-accent hover:border hover:border-[#F9F9F9]/15 hover:rounded-full= hover:border-[2px] font-Anek hover:bg-yellow-500 hover:border-yellow-500  font-bold rounded-full txt-[18px] px-4 md:px-5 py-2.5 text-center me-2 mb-4 md:mb-2">
            DAFTAR SEKARANG !
        </a>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const elements = document.querySelectorAll('[id^="count-"]');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const countTo = parseInt(element.getAttribute('data-count'), 10);
                    animateCount(element, countTo);
                    observer.unobserve(
                        element); // Menghentikan observasi setelah animasi selesai
                }
            });
        }, {
            threshold: 0.5 // Memulai animasi ketika 50% elemen terlihat
        });

        elements.forEach(element => {
            observer.observe(element);
        });
    });

    function animateCount(element, countTo) {
        let countFrom = 0;
        const duration = 2000; // Durasi animasi dalam milidetik
        const frameDuration = 1000 / 60; // Durasi setiap frame (60 frame per detik)
        const totalFrames = Math.round(duration / frameDuration);
        const easeOutQuad = t => t * (2 - t);

        let frame = 0;
        const count = () => {
            frame++;
            const progress = easeOutQuad(frame / totalFrames);
            const currentCount = Math.round(countFrom + (countTo - countFrom) * progress);
            element.innerText = currentCount;
            if (frame < totalFrames) {
                requestAnimationFrame(count);
            }
        };
        count();
    }
</script>
