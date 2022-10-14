<!DOCTYPE html>
<html lang="id">
<head>
    {{-- meta --}}
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    {{-- meta --}}
    <title>@yield('judul') - {{ config('app.name') }}</title>
    {{-- ikon --}}
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    {{-- ikon --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    {{-- css --}}
    {{-- vendor --}}
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    {{-- vendor --}}
    {{-- template utama --}}
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    {{-- template utama --}}
    {{-- css --}}
</head>
<body>
{{-- header --}}
@include('struktur.komponen.header')
{{-- header --}}
{{-- hero --}}
@includeWhen(url()->current() === route('beranda'), 'struktur.komponen.hero')
{{-- hero --}}
{{-- utama --}}
<main id="main">
    @yield('utama')
</main>
{{-- utama --}}
{{-- footer --}}
@include('struktur.komponen.footer')
{{-- footer --}}
<div id="preloader"></div>
<a class="align-items-center back-to-top d-flex justify-content-center" href="#"><i class="bi bi-arrow-up-short"></i></a>
{{-- js --}}
{{-- vendor --}}
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
{{-- vendor --}}
{{-- template utama --}}
<script src="{{ asset('assets/js/main.js') }}"></script>
{{-- template utama --}}
{{-- js --}}
</body>
</html>
