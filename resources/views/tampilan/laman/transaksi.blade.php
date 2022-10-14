@extends('struktur.dasar')
@section('judul', 'Transaksi')
@section('utama')
    {{-- breadcrumb --}}
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Transaksi</h2>
        </div>
    </div>
    {{-- breadcrumb --}}
    <section class="contact" id="contact">
        <div class="container" data-aos="fade-up">
            <div class="mt-5 row">
                <div class="col-lg-12 mt-5 mt-lg-0">
                    <form class="form" method="post" role="form">
                        @csrf
                        <div class="form-group mt-3 row">
                            <label class="col-form-label col-sm-2" for="borrow-date">Tanggal Pinjam:</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="borrow-date" name="tanggal-pinjam" required type="date">
                            </div>
                        </div>
                        <div class="form-group mt-3 row">
                            <label class="col-form-label col-sm-2" for="return-date">Tanggal Kembali:</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="return-date" name="tanggal-kembali" required type="date">
                            </div>
                        </div>
                        <div class="form-group mt-3 row">
                            <label class="col-form-label col-sm-2" for="lateness">Keterlambatan:</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="lateness" min="0" name="keterlambatan" required type="number">
                            </div>
                        </div>
                        <div class="form-group mt-3 row">
                            <label class="col-form-label col-sm-2" for="fine">Denda:</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="fine" min="0" name="denda" required type="number">
                            </div>
                        </div>
                        @isset($total_denda)
                            <div class="my-3">
                                <div class="error-message">{{ sprintf('Rp%s', number_format($total_denda)) }}</div>
                            </div>
                        @endisset
                        <div @class(['my-3' => !isset($total_denda), 'text-center'])><button type="submit">Hitung Keterlambatan</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
