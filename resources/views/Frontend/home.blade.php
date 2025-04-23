    @section('title', 'Home')

    @extends('Frontend.Layouts.app')
    @section('content')
        @include('Frontend.landingpage.hero-section')
        @include('Frontend.landingpage.biayakuliah-section')
        @include('Frontend.landingpage.sambutan-section')
        @include('Frontend.landingpage.gallery-section')
        @include('Frontend.landingpage.berita-section')
    @endsection
