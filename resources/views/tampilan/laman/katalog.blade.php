@extends('struktur.dasar')
@section('judul', 'Katalog')
@section('utama')
    {{-- breadcrumb --}}
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Katalog</h2>
        </div>
    </div>
    {{-- breadcrumb --}}
    <section class="trainers" id="trainers">
        <div class="container" data-aos="fade-up">
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="align-items-stretch col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img alt="Sampul" class="img-fluid" src="{{ asset('storage/sampul/6349805fd3d8c.jpg') }}">
                        <div class="member-content">
                            <h4>Dongeng Islami Hutan Cahaya</h4>
                            <p>Muti si semut merah, dan Muwu si sewut hitam, sedang bermain di taman Hutan Cahaya. Wah, ternyata di sana ada Paman Kupu sedang membagikan kue. Semua hewan langsung mengantre, semuanya ingin kebagian kue. Namun, ada keributan terjadi. Ternyata Komo si Kumbang tidak mau mengantre. Ia malah menyerobot antrean karena ingin mendapat kue lebih dulu.</p>
                        </div>
                    </div>
                </div>
                <div class="align-items-stretch col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img alt="Sampul" class="img-fluid" src="{{ asset('storage/sampul/6349808c5dba3.jpg') }}">
                        <div class="member-content">
                            <h4>Cerita Anak Ayam</h4>
                            <p>Kalian pasti sudah sering melihatku. Tapi, sudahkah kalian tahu ceritaku? Aku juga punya petualangan, lho. Yuk, ikuti ceritaku. Kalian akan tahu bagaimana aku lahir, makan, bermain, juga menghindar dari para pemangsa. Dijamin seru, deh!</p>
                        </div>
                    </div>
                </div>
                <div class="align-items-stretch col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img alt="Sampul" class="img-fluid" src="{{ asset('storage/sampul/63498122249ea.jpg') }}">
                        <div class="member-content">
                            <h4>Cerita Anak Binatang : Kelelawar</h4>
                            <p>Hai teman-teman! Perkenalkan, Aku kelelawar. Biasanya orang kerap melihatku dengan rasa takut karena rupaku yang menyeramkan. Namun sebenarnya aku sama sekali tidak menyeramkan, kok! Ada sisi lain dariku yang harus kamu ketahui, loh.</p>
                        </div>
                    </div>
                </div>
                <div class="align-items-stretch col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img alt="Sampul" class="img-fluid" src="{{ asset('storage/sampul/634981b482716.jpg') }}">
                        <div class="member-content">
                            <h4>Dongeng Anak-Anak Klasik Dunia</h4>
                            <p>Buku dongeng yang satu ini berhasil diterjemahkan dan menjadi buku kumpulan dongeng anak-anak klasik dunia mulai dari abad ke-16. Cerita di dalamnya ditulis oleh pengarang-pengarang populer yang namanya sudah dikenal secara internasional, yang salah satunya membahas mengenai sekelompok kecil kegiatan kesusastraan Prancis.</p>
                        </div>
                    </div>
                </div>
                <div class="align-items-stretch col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img alt="Sampul" class="img-fluid" src="{{ asset('storage/sampul/6349824eb4ac1.jpg') }}">
                        <div class="member-content">
                            <h4>Sepatu Sang Raja Dan Dongeng Indah Lainnya</h4>
                            <p>Sepatu sang Raja dan Dongeng-Dongeng Indah Lainnya merupakan kumpulan dongeng yang sarat moral. Lewat enam kisah di dalamnya, anak-anak diajak untuk lebih memedulikan sesama, menghargai kelebihan orang lain, dan bertanggung jawab.</p>
                        </div>
                    </div>
                </div>
                <div class="align-items-stretch col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img alt="Sampul" class="img-fluid" src="{{ asset('storage/sampul/634983ae81eac.jpg') }}">
                        <div class="member-content">
                            <h4>Kumpulan Dongeng Bijak Untuk Anak</h4>
                            <p>Kumpulan Dongeng Bijak untuk Anak menghadirkan 10 cerita menarik yang memiliki 10 nilai kehidupan dari kutipan orang-orang hebat, seperti Albert Einstein, Mother Teresa, Dalai Lama, dan banyak lagi. Dengan tokoh beruang lucu dan menggemaskan, teks dwibahasa, ditambah ilustrasi yang indah, anak pasti suka dengan kisah-kisah bijak di dalamnya.</p>
                        </div>
                    </div>
                </div>
                <div class="align-items-stretch col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img alt="Sampul" class="img-fluid" src="{{ asset('storage/sampul/6349843b75d29.jpg') }}">
                        <div class="member-content">
                            <h4>Beruang Madu</h4>
                            <p>Halo, teman-teman. Aku beruang madu. Pernahkah kalian melihatku? Yuk, ikuti ceritaku. Kalian akan tahu apa makananku juga di mana aku tinggal. Ah, pasti seru!</p>
                        </div>
                    </div>
                </div>
                <div class="align-items-stretch col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img alt="Sampul" class="img-fluid" src="{{ asset('storage/sampul/63498450749bd.jpg') }}">
                        <div class="member-content">
                            <h4>Buku Dongeng Paling Populer</h4>
                            <p>Salah satu cara efektif untuk masuk ke dalam dunia anak adalah melalui cerita dan dongen. Sambil menceritakan dongeng dan cerita kepada mereka, kita dapat menyampaikan nilai-nilai positif dan keteladanan tanpa terasa memaksa.</p>
                        </div>
                    </div>
                </div>
                <div class="align-items-stretch col-lg-4 col-md-6 d-flex">
                    <div class="member">
                        <img alt="Sampul" class="img-fluid" src="{{ asset('storage/sampul/634984617dffb.jpg') }}">
                        <div class="member-content">
                            <h4>Cerita Persaudaraan Chika Dan Chiko Belajar Ganti Popok</h4>
                            <p>Chika dan Chiko berkejar-kejaran di dalam rumah hingga membuat gaduh. Hal tersebut membuat Yori, adik mereka, terbangun dan menangis. Ternyata popok Yori bocor dan dia merasa tidak nyaman.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
