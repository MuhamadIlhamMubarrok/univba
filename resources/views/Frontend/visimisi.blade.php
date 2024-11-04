@extends('Frontend.Layouts.app')
@section('content')

<style>
    h1, h2, h3, h4, h5, h6 {
    font-family: 'Poppins', sans-serif;
    }

    p, a, li, ul {
    font-family: 'Poppins', sans-serif;
    letter-spacing: .02em;
    }

    .custom-counter {
    margin: 0;
    padding: 0;
    list-style-type: none;
    }

    .custom-counter li {
    counter-increment: step-counter;
    margin-bottom: 20px;
    }

    .custom-counter li::before {
    content: counter(step-counter);
    margin-right: 5px;
    font-size: 80%;
    background-color: #8F0000;
    color: white;
    font-weight: bold;
    padding: 2px 7px;
    border-radius: 3px;
    }


    .btn-sections {
    font-family: 'Poppins', sans-serif;
    background-color: #ffffff00;
    border-width: 1px;
    display: inline-block;
    padding: 8px 20px;
    margin: 0;
    width: auto;
    line-height: 1.42;
    font-weight: bold;
    text-decoration: none;
    text-align: center;
    vertical-align: middle;
    white-space: normal;
    cursor: pointer;
    border: 2px solid #000000;
    min-width: 125px;
    -webkit-appearance: none;
    -moz-appearance: none;
    border-radius: 2px;
    box-shadow: inset 0 0 0 0 black;
    transition: .75s;
    }
</style>
        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1 style="color: #fff;">Visi dan Misi</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li style="color: #fff;"><a href="./">Home</a>
                            </li>
                            <li style="color: #fff;">Visi Misi</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

               <div class="row">
                  <div style="min-width: 50%;" class="col-md-8 col-sm-6 col-xs-12">
                    <h2>Visi</h2>
                    <hr style="border: 1px solid #00000026; width: 15%; margin-left:0;"><br>
                    <p class="text-justify">“Menjadi Perguruan Tinggi yang menhasilkan Programmer di bidang Teknologi Informasi yang kompetitif dan berkulitas serta berperan nyata dalam bidang pengajaran, penelitian dan pengabdian masyarakat di Provinsi Riau Tahun 2025.”
                    </p><hr></div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <img width="80%" style="margin-right: 15px; border-radius: 10px;" src="/images/logo/logo-azzuhra.png">
                    <p style="padding-top: 5px; font-size: 11px; color: #00000059;">Photo by <a style="color: #00000059; text-decoration: none;" href="">Institut Az zhura</a></p>
                  </div>
                      <div style="min-width: 50%;" class="col-md-12 col-sm-6 col-xs-12">
                        <h2>Misi</h2>
                        <hr style="border: 1px solid #00000026; width: 15%; margin-left:0;"><br>
                        <p>
                        <ol class="custom-counter">
                            <li>Menyelenggarakan Tri Dharma Perguruan Tinggi.</li>
                            <li>Menyelenggarakan Program Diploma tiga yang berbasiskan Teknologi Informasi Meningkatkan Sumber Daya Manusia.</li>
                            <li>Menyelenggarakan Evaluasi Kurikulum secara berkelanjutan untuk menghasilkan Programer yang kompetitif dan berkulitas.</li>
                            <li>Menyediakan sarana dan prasarana yang memadai dalam rangka mendukung proses pembelajaran.</li>
                            <li>Melaksanakan Tata Kelola Perguruan Tinggi secara efektif dan efisien dalam menyikapi perubahan yang terjadi.</li>
                            <li>Menjalin kerja sama dengan berbagai Stakeholder di Provinsi Riau.</li>
                        </ol>
                        <hr></p>
                    </div>
            </div>
            <!-- /.container -->
            </div>
        </div>

@endsection