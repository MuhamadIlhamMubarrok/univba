@extends('Frontend.Layouts.app')
@section('content')

<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Contact</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="./">Home</a>
                    </li>
                    <li>Contact</li>
                </ul>

            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container" id="contact">

        <div class="row">
            <div class="col-md-8">

                <section>

                    <div class="heading">
                        <h2>Form Kontak Informasi</h2>
                    </div>

                    <form action="index.php?m=simpan_kontak" method="POST">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="no_telp">Nomor HP</label>
                                    <input type="text" class="form-control" name="no_hp" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="message">Pesan/Saran</label>
                                    <textarea name="pesan" rows="5" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="form-group col-sm-12 text-center">
                                <label></label>
                                <br>
                                <div class="form-group col-sm-12 text-center">

                                    <div class="g-recaptcha" data-sitekey="6LdVXBQqAAAAAI7s_5HdkCmMIvc5obksttcqDR0k"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-template-main" style="width: 300px" onClick="return confirm('Anda yakin melakukan ini?')"><i class="fa fa-envelope-o"></i> Kirim Pesan</button>

                            </div>
                        </div>
                        <!-- /.row -->
                    </form>

                </section>

            </div>

            <div class="col-md-4">

                <section>

                    <h3 class="text-uppercase">Alamat Kampus & Sekretariat</h3>

                    <p> JL. Melati No.16, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28292
                    </p>

                    <h3 class="text-uppercase">Call & SMS center</h3>

                    <p>
                    Telepon : <strong>0878-9019-8284</strong><br>
                    Whatsapp : <strong>087818000395</strong>
                    </p>

                </section>

            </div>

        </div>
        <!-- /.row -->
        <div class="row">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.670467423746!2d101.37127177363834!3d0.49326166373303937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5aea4794b82b5%3A0xf42c622db0b7fd94!2sAMIK%20Tri%20Dharma%20Pekanbaru!5e0!3m2!1sen!2sus!4v1721459371906!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
    <!-- /#contact.container -->
</div>
<!-- /#content -->



@endsection