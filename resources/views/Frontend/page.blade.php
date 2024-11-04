@extends('Frontend.Layouts.app')
@section('content')

<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 style="color: #fff;">{{ $page->judul }}</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li style="color: #fff;"><a href="{{ url('/') }}">Home</a></li>
                    <li style="color: #fff;">{{ $page->judul }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-9 clearfix">
                <section>
                    <div id="text-page">
                        {!! $page->isi !!} <!-- Render the 'isi' content as HTML -->
                    </div>
                </section>
            </div>
            <!-- /.col-md-9 -->

            <div class="col-sm-3">
                <div class="panel panel-default sidebar-menu">
                    <div class="panel-heading">
                        <h3 class="panel-title">Info Lain</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="{{ url('index.php?m=daftar') }}">Pendaftaran Online</a></li>
                            <li><a href="{{ url('index.php?m=galeri') }}">Galeri Foto</a></li>
                            <li><a href="{{ url('index.php?m=kontak') }}">Kontak</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.sidebar-menu -->

                <div class="banner"></div>
                <!-- /.banner -->
            </div>
            <!-- /.col-md-3 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#content -->
@endsection
