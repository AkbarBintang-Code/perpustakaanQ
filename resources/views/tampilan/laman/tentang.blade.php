@extends('struktur.dasar')
@section('judul', 'Tentang')
@section('utama')
{{-- breadcrumb --}}
<div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
        <h2>UTS Pemrograman Web Lanjut</h2>
        <p>Proyek UTS kali ini kami membuat sebuah situs untuk peminjaman buku.</p>
    </div>
</div>
{{-- breadcrumb --}}
{{-- testimoni --}}
<section class="testimonials" id="testimonials">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Kelompok</h2>
            <p>Nama Anggota Kelompok</p>
        </div>
        <div class="swiper testimonials-slider" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                <!-- <div class="swiper-slide"> -->
                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <img alt="Foto" class="testimonial-img" src="{{ asset('storage/foto/ar.jpg') }}">
                        <h3>Ananda Rizky Kurniawan</h3>
                        <h4>20410100045</h4>
                    </div>
                </div>
                <!-- </div> -->
                <!-- <div class="swiper-slide"> -->
                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <img alt="Foto" class="testimonial-img" src="{{ asset('storage/foto/naf.jpg') }}">
                        <h3>Nafilah Nursabila</h3>
                        <h4>20410100048</h4>
                    </div>
                </div>
                <!-- </div> -->
                <!-- <div class="swiper-slide"> -->
                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <img alt="Foto" class="testimonial-img" src="{{ asset('storage/foto/jjl.jpg') }}">
                        <h3>Ananda Azizul Akbar</h3>
                        <h4>20410100053</h4>
                    </div>
                </div>
                <!-- </div> -->
                <!-- <div class="swiper-slide"> -->
                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <img alt="Foto" class="testimonial-img" src="{{ asset('storage/foto/akbar.jpg') }}">
                        <h3>Akbar Bintang Izzulhaq</h3>
                        <h4>20410100055</h4>
                    </div>
                </div>
                <!-- </div> -->
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
{{-- testimoni --}}
@endsection