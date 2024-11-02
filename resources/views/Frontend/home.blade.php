@extends('Frontend.Layouts.app')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
<!-- lightbox2 (lightbox.min.css)-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css">
<style>
    @import url("https://fonts.googleapis.com/css?family=Poppins");
    html, body {
    font-family: "Montserrat";
    }

    *, *::before, *::after {
    box-sizing: border-box;
    }

    .no-scroll {
    overflow: hidden;
    }

    .container-event {
    background: #44295C;
    padding: 2em;
    min-height: 70vh;
    display: flex;
    }

    .icon {
    display: inline-block;
    width: 1em;
    height: 1em;
    stroke-width: 0;
    stroke: currentColor;
    fill: currentColor;
    }

    .blend-image, .card__background img {
    /*filter: brightness(250%) grayscale(100%);*/
    mix-blend-mode: screen;
    }

    .center-image, .card__background img {
    width: 100%;
    min-height: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    -o-object-fit: cover;
        object-fit: cover;
    }

    .slick-slide {
    padding: 2em 0.5em;
    }

    .card-slider {
    margin: auto;
    width: 100%;
    }

    .card {
    background: #da4d4d;
    display: flex;
    padding: 2em;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-end;
    border-radius: 20px;
    overflow: hidden;
    position: relative;
    z-index: 1;
    height: 350px;
    box-shadow: 0 30px 50px -25px rgba(0, 0, 0, 0.25);
    }
    .card > * {
    transition: opacity 350ms;
    }
    .card--opened > * {
    opacity: 0;
    }

    .card__background {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
    /*background: #2fd4dc;*/
    z-index: -1;
    text-align: left;
    }
    .card__background::after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    /*background: linear-gradient(to top, #fff 0, rgba(255, 255, 255, 0) 70%);*/
    }

    .card__category {
    text-transform: uppercase;
    color: #fff;
    background: #2fd4dc;
    font-size: 0.85em;
    font-weight: 600;
    padding: 0.2em 0.5em 0.25em;
    }

    .card__title {
    text-transform: uppercase;
    margin: 0.5em 0;
    color: #2e5f80;
    }

    .card__duration {
    color: #6f7070;
    }

</style>
<style>
 .parentmar {
      width: 100%;
      border: 2px solid #121aff;
      font: 18px bold Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      background-color: #252525;
      margin-bottom: 30px;
    }
  
    .childmar {
      background: linear-gradient(to right, #121aff, #76c6ce);
      padding: 10px 20px;
      line-height: 18px;
      font: 20px bold;
      color: floralwhite;
      margin: 0;
    }
</style>

<!-- Slider & Banner -->
<section class="no-mb">
    <div class="centered">
      <div class="animated-title text-center" style="--text: 'Institut Az Zuhra'; margin-top: 10px;">Institut Az Zuhra
    </div>
    <div>
        <img style="width: 100%; margin-top: 20px;" src="/images/banner-slider/Baner-Azzuhra.png" alt="Institut Az Zuhra Kuliah Karyawan">
    </div>
</section>

<!-- Biaya Kuliah -->
<section class="no-mb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1 class="text-center">{{ $beranda->judul }}</h1>

                <p class="lead">{{ $beranda->isi }}</p>

                <p class="text-center">
                    <a href="{{ url('index.php?m=daftar') }}" class="btn btn-primary btn-lg">Pendaftaran Online</a>
                </p>
            </div>
        </div>
    </div>
</section>


<!-- Berita Kampus -->
@foreach ($berita as $item)
    <div class="post-slide">
        <div class="post-img">
            <img src="{{ $item->path }}{{ $item->file_foto }}" alt="{{ $item->judul }}" loading="lazy">
            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
        </div>
        <div class="post-content">
            <h3 class="post-title">
                <a href="{{ url('berita-terkini/' . $item->slug) }}">{{ $item->judul }}</a>
            </h3>
            <p class="post-description">{{ $item->ringkasan }}</p>
            <span class="post-date"><i class="fa fa-calendar-o"></i>{{ $item->tanggal_berita }}</span>
            <a href="{{ url('berita-terkini/' . $item->slug) }}" class="read-more">Selengkapnya</a>
        </div>
    </div>
@endforeach






<!-- lightbox2 (lightbox.min.js)-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.2/web-animations.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script>
    jQuery(".card-slider").slick({
    slidesToShow: 3,
    autoplay: true,
    slidesToScroll: 1,
    dots: false,
    responsive: [
        {
        breakpoint: 768,
        settings: {
            slidesToShow: 2
        }
        },
        {
        breakpoint: 00,
        settings: {
            slidesToShow: 1
        }
        }
    ]
    });

    let cards = document.querySelectorAll(".card");
    let card;
    let modal = document.querySelector(".modal");
    let closeButton = document.querySelector(".modal__close-button");
    let page = document.querySelector(".page");
    const cardBorderRadius = 20;
    const openingDuration = 900; //ms
    const closingDuration = 900; //ms
    const timingFunction = "cubic-bezier(.76,.01,.65,1.38)";

    //  var Scrollbar = window.Scrollbar;
    //  Scrollbar.init(document.querySelector(".modal__scroll-area"));

    function flipAnimation(first, last, options) {
    let firstRect = first.getBoundingClientRect();
    let lastRect = last.getBoundingClientRect();

    let deltas = {
        top: firstRect.top - lastRect.top,
        left: firstRect.left - lastRect.left,
        width: firstRect.width / lastRect.width,
        height: firstRect.height / lastRect.height
    };

    return last.animate(
        [
        {
            transformOrigin: "top left",
            borderRadius: `
        ${cardBorderRadius / deltas.width}px / ${
            cardBorderRadius / deltas.height
            }px`,
            transform: `
        translate(${deltas.left}px, ${deltas.top}px) 
        scale(${deltas.width}, ${deltas.height})
        `
        },
        {
            transformOrigin: "top left",
            transform: "none",
            borderRadius: `${cardBorderRadius}px`
        }
        ],
        options
    );
    }

    cards.forEach((item) => {
    item.addEventListener("click", (e) => {
        jQuery(".card-slider").slick("slickPause");
        card = e.currentTarget;
        page.dataset.modalState = "opening";
        card.classList.add("card--opened");
        card.style.opacity = 0;
        document.querySelector("body").classList.add("no-scroll");

        let animation = flipAnimation(card, modal, {
        duration: openingDuration,
        easing: timingFunction,
        fill: "both"
        });

        animation.onfinish = () => {
        page.dataset.modalState = "open";
        animation.cancel();
        };
    });
    });
</script>

@endsection