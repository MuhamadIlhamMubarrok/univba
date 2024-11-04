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
                        <h1 style="color: #fff;">Sejarah Singkat</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li style="color: #fff;"><a href="./">Home</a>
                            </li>
                            <li style="color: #fff;">Sejarah Singkat</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <h2>Sejarah Singkat Institut Az Zuhra</h2>
                        <hr style="border: 1px solid #00000026; width: 25%; margin-left:0;"><br>
                        <p class="text-justify">
                          Ide pendirian kampus AMIK Tri Dharma Pekanbaru dicetus pada bulan April 2002. Mereka sepakat untuk mendirikan Perguruan Tinggi yang bergerak di bidang komputer. Ide ini diwujudkan dengan terlebih dahulu membentuk Yayasan Perguruan Tinggi Riau. Setelah itu pada tahun yang sama, dilanjutkan dengan pengurusan izin pendirian Akademi Manjemen Informatika dan Komputer (AMIK) Tri Dharma Pekanbaru ke Dirjen Dikti di Jakarta. Saat itu izin yang diperoleh sesuai SK Mendiknas No: 249/D/O/2002 dengan 2 Program Studi yaitu :
                          <br>
                          1. Manajemen Informatika<br>
                            2. Teknik Komputer
                        </p>
                        
                        <p class="text-justify">
                          AMIK Tri Dharma Pekanbaru mulai beroperasi menerima Mahasiswa baru pada Bulan September 2003, setelah terlebih dahulu melakukan sosialisasi kampus ke sekolah-sekolah yang ada di Provinsi Riau. Pada Tahun 2011, Program Studi Manajemen Informatika telah terakreditasi oleh Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) dengan No SK:005/BAN-PT/Ak-XI/Dpl-III/VIII/2011 yang berakhir pada tahun 2016. Lalu, pada tahun 2013, Program Studi Teknik Komputer juga telah terakreditasi oleh Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) dengan No SK: 209/SK/BAN-PT/Ak-XIII/Dpl-III/2013 yang berakhir pada tahun 2018.
                        </p>
                        <p class="text-justify">
                         Kemudian, Pada tahun 2015, AMIK Tri Dharma Pekanbaru mengajukan Borang Akreditasi Institusi, dan Alhamdulillah juga telah terakreditasi oleh Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) dengan No SK:813/SK/BAN-PT/Akred/PT/VIII/2015 yang berakhir pada tahun 2020. Dan, Pada tahun 2016, Seiring dengan akan berakhirnya status akreditasi untuk Program Studi Manajemen Informatika, maka AMIK Tri Dharma Pekanbaru kembali mengajukan Borang Reakreditasi untuk Program Studi Manajemen Informatika pada bulan februari 2017, dan hasilnya status Akreditasi Program Studi Manajemen Informatika telah diperpanjang sampai tahun 2021 oleh BAN-PT dengan No.SK:0898/SK/BAN-PT/Akred/Dipl-III/2016.
                        </p>
                      
                    </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <img width="90%" style="margin-right: 15px; border-radius: 10px;" src="/images/logo/logo-azzuhra.png"; text-decoration: none; href="">Institut Azzuhra</a></p>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div style="height: auto; background: #44295C; margin-bottom: 20px; border-radius: 15px;">
                      <h4 style="line-height: 40px; text-align: center; padding: 30px 20px 30px 20px; color: #ffffff;">Adab Dulu Baru Ilmu </i></h4>
                    </div>
                </div>
            <!-- /.container -->
            </div>
        </div>

@endsection