<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 footer-contact">
                    <h3>{{ config('app.name') }}</h3>
                    <p>Surabaya, SBY<br>Indonesia</p>
                </div>
                <div class="col-lg-6 col-md-6 footer-links">
                    <h4>Pranala Bermanfaat</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i><a href="{{ route('beranda') }}">Beranda</a></li>
                        <li><i class="bx bx-chevron-right"></i><a href="#">Katalog</a></li>
                        <li><i class="bx bx-chevron-right"></i><a href="{{ route('laman.transaksi') }}">Transaksi</a></li>
                        <li><i class="bx bx-chevron-right"></i><a href="{{ route('laman.tentang') }}">Tentang</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">&copy; {{ date('Y') }} <strong><span>{{ config('app.name') }}</span></strong>.</div>
            <div class="credits">Didesain oleh <a href="https://bootstrapmade.com/">BootstrapMade</a></div>
        </div>
        <div class="pt-3 pt-md-0 social-links text-center text-md-right">
            <a class="twitter" href="#"><i class="bx bxl-twitter"></i></a>
            <a class="facebook" href="#"><i class="bx bxl-facebook"></i></a>
            <a class="instagram" href="#"><i class="bx bxl-instagram"></i></a>
            <a class="google-plus" href="#"><i class="bx bxl-skype"></i></a>
            <a class="linkedin" href="#"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer>
