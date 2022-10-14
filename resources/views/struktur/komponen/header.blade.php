<header class="fixed-top" id="header">
    <div class="align-items-center container d-flex">
        <h1 class="logo me-auto"><a href="{{ route('beranda') }}">Beranda</a></h1>
        <nav class="navbar order-last order-lg-0" id="navbar">
            <ul>
                <li><a @class(['active' => url()->current() === route('beranda')]) href="{{ route('beranda') }}">Beranda</a></li>
                <li><a href="#">Katalog</a></li>
                <li><a href="#">Transaksi</a></li>
                <li><a @class(['active' => url()->current() === route('laman.tentang')]) href="{{ route('laman.tentang') }}">Tentang</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
