@extends('layouts.index')

@section('content')
    <header>
        <!-- Page Header Start -->
        <div
            class="container-fluid page-header py-5 wow fadeIn"
            data-wow-delay="0.1s"
        >
            <div class="container text-center py-5">
                <h1 class="display-4 text-white animated slideInDown mb-4">
                    About Us
                </h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="/ummar">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->
    </header>

    <main>
        <!-- About Start -->
        <div class="container-xxl-fluid bg-warning pt-5 pb-3">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="wow zoomIn mb-5 py-3" data-wow-delay="0.2s">
                        <h1 class="text-center mb-2 text-dark">• Ummar.id •</h1>
                        <p class="text-secondary">
                            Ummar.id merupakan platform web dengan layanan jasa jual beli
                            kredit peralatan rumah tangga, alat-alat elektronik, kendaraan
                            bermotor, dll. Untuk harganya menyesuaikan dengan jangka waktu
                            kredit. Ummar.id menerapkan sistem kredit syariah yang mana
                            sesuai dengan ketentuan agama islam dan peraturan pemerintah
                            tentang kredit syariah. Jadi Anda tidak perlu khawatir akan
                            dikenakan biaya denda, biaya bunga, bahkan penyitaaan barang.
                            <br /><br />
                            Ummar.id berjalan di bawah naungan PT. Rabbani Niaga Syariah
                            yang didirikan pada tahun 2022 di Surabaya, Jawa Timur. <br />
                            Kami mempunyai semangat untuk berkontribusi aktif dalam
                            memperluas dan memperkuat ekosistem syariah di Indonesia. Dengan
                            menyediakan pembiayaan untuk konsumen yang ingin membeli
                            produk-produk seperti alat rumah tangga, alat-alat elektronik,
                            handphone, dan kendaraan bermotor sesuai dengan ketentuan
                            syariah. Persyaratan pengajuan kredit juga sangat mudah untuk
                            mendapatkan cicilan kredit tanpa riba, baik dari segi hukum
                            agama islam maupun dari segi keuangan. <br /><br />
                            Kami berkomitmen penuh untuk mematuhi syariat islam tentang
                            sistem syariah. Kami terus berusaha untuk dapat memberikan
                            kontribusi yang baik bagi ekosistem syariah di Indonesia. Kami
                            juga akan terus berkembang untuk dapat memperoleh sistem yang
                            baik dalam platform ini, sehingga Ummar.id dapat menjadi solusi
                            akan kebutuhan Anda dengan membeli barang yang dapat dicicil
                            tanpa khawatir terhadap dampak yang ditimbulkan dari riba.
                        </p>
                    </div>
                    <div class="wow zoomIn" data-wow-delay="0.2s">
                        <h2 class="text-center mb-2 text-dark">
                            • Belanja Kebutuhanmu Jadi Mudah dan Aman •
                        </h2>
                        <p class="text-secondary">
                            Sekarang belanja apapun tidak perlu menunggu uang terkumpul.
                            Meski dana Anda belum terkumpul, Anda masih bisa untuk
                            mendapatkannya dengan cara melakukan pembelian barang dengan
                            cara pembayaran cicilan. <br />
                            Mendengar pembayaran cicilan identik dengan kata biaya bunga,
                            riba, denda, ataupun yang lainnya. Kami hadir dengan senang hati
                            untuk membantu permasalahan tersebut. <br /><br />
                        </p>
                        <br />
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl-fluid bg-warning py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3 mt-3 mb-md-5">
                            <img
                                class="img-fluid w-100 wow zoomIn"
                                data-wow-delay="0.3s"
                                src="{{ asset('images/ummar/skema-ummar.png') }}"
                            />
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <h3
                                class="mb-3 text-center text-dark border-bottom border-warning border-3 pb-3"
                            >
                                Keterangan Tentang Skema Akad Murabahah
                            </h3>
                            <p class="text-secondary">
                                1. Pelanggan menyampaikan kebutuhan barang yang dia inginkan
                                ke LKS dengan kriteria tertentu. LKS melakukan uji kelayakan
                                bagi pelanggan. Baik secara dokumen maupun yang sifatnya
                                penilaian kejujuran. <br /><br />
                                2. LKS mencarikan barang yang diinginkan pelanggan, dan
                                membelinya dengan tunai. <br /><br />
                                3. Suplier mengirim produk ke LKS dan tanggung jawab terhadap
                                resiko barang telah berpindah ke LKS. <br /><br />
                                4. Pelanggan melakukan transaksi dengan LKS untuk membeli
                                barang yang telah dipesan secara kredit, dengan harga sesuai
                                kesepakatan. <br /><br />
                                5. LKS menyerahkan barang itu, dan pelanggan membayar cicilan
                                kepada LKS. <br /><br /><br />

                                Untuk alur nomor 4, pelanggan diberi kebebasan antara
                                melanjutkan transaksi ataukah membatalkannya. Dan ketika
                                pelanggan membatalkannya, tidak disebut ingkar janji. Karena
                                maksud 'janji beli' dari pelanggan adalah dia janji untuk
                                membeli jika barang dan harganya sesuai dengan apa yang
                                diinginkan pembeli. Jika tidak sesuai dan pembeli
                                membatalkannya, maka pembeli tidak disebut ingkar janji.
                                <br />
                            </p>
                            <span class="text-dark">LKS : Lembaga Keuangan Syariah</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    </main>
@endsection
