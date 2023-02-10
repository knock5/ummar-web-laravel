@extends('layouts.index')

@section('content')
    <header>
        <!-- Page Header Start -->
        <div
            class="container-fluid page-header py-5 mb-5 wow fadeIn"
            data-wow-delay="0.1s"
        >
            <div class="container text-center py-5">
                <h1 class="display-4 text-white animated slideInDown mb-4">FAQ</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->
    </header>

    <main>
        <!-- Service Start -->
        <div class="container-xxl-fluid py-5">
            <div class="container">
                <div
                    class="text-center mx-auto wow fadeInUp"
                    data-wow-delay="0.1s"
                    style="max-width: 500px"
                >
                    <h1
                        class="display-6 mb-5 border-bottom border-warning border-3 pb-2"
                    >
                        Pertanyaan yang sering diajukan
                    </h1>
                </div>
                <!-- Tentang Ummar -->
                <div class="p-2 mb-3 wow fadeInUp text-dark" data-wow-delay="0.1s">
                    <h4 class="text-center mt-4">Tentang Ummar</h4>
                    <!-- Accordion -->
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item bg-warning">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseOne"
                                >
                                    Apa itu Ummar?
                                </button>
                            </h2>
                            <div
                                id="flush-collapseOne"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne"
                                data-bs-parent="#accordionFlushExample"
                            >
                                <div class="accordion-body text-secondary">
                                    Ummar.id adalah sebuah platform jasa jual beli kredit
                                    peralatan rumah tangga, alat-alat elektronik, kendaraan
                                    bermotor, dan lain-lain di bawah naungan
                                    <span class="fw-bold text-dark"
                                    >PT.Rabbani Niaga Syariah</span
                                    >
                                    dengan sistem syariah (Akad Murabahah). Hal ini diterapkan
                                    guna memudahkan para konsumen dalam menggunakan sistem
                                    pembayaran secara kredit sesuai dengan ketentuan syariah,
                                    tanpa adanya biaya bunga kredit, denda, ataupun penyitaan
                                    barang.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseTwo"
                                >
                                    Apa itu Murabahah?
                                </button>
                            </h2>
                            <div
                                id="flush-collapseTwo"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo"
                                data-bs-parent="#accordionFlushExample"
                            >
                                <div class="accordion-body text-secondary">
                                    Murabahah atau kos tokok (bahasa Arab: مرابحه) ditakrifkan
                                    sebagai penjualan barangan, yang tidak melanggar syariah,
                                    pada harga yang termasuk margin keuntungan yang dipersetujui
                                    oleh kedua-dua penjual dan pembeli. Antara syarat adalalah
                                    harga belian dan jualan, kos-kos lain serta margin
                                    keuntungan hendaklah dinyatakan dengan jelas semasa
                                    perjanjian jualan dilaksanakan.
                                    <span class="fst-italic text-dark"
                                    >(Wikipedia)</span
                                    >
                                    <br /><br />
                                    Namun dalam ranah ekonomi syariah, murabahah sendiri
                                    mengandung arti sebagai transaksi penjualan barang dengan
                                    menyatakan harga perolehan dan keuntungan (margin) yang
                                    disepakati oleh penjual dan pembeli. <br /><br />
                                    Sementara itu, berdasarkan fatwa DSN (Dewan Syariah
                                    Nasional) Majelis Ulama Indonesia (MUI), Fatwa
                                    04/DSN-MUI/IV/2000, akad Murabahah adalah, ”Menjual suatu
                                    barang dengan menegaskan harga belinya kepada pembeli, dan
                                    pembeli membayarnya dengan harga yang lebih sebagai laba”.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseThree"
                                >
                                    Apa perbedaan Ummar dengan kartu kredit dan pembiayaan
                                    kredit lain yang menggunakan bunga?
                                </button>
                            </h2>
                            <div
                                id="flush-collapseThree"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree"
                                data-bs-parent="#accordionFlushExample"
                            >
                                <div class="accordion-body text-secondary">
                                    1. Ummar tidak dikenakan biaya bunga. <br />
                                    2. Tidak ada biaya denda. <br />
                                    3. Tidak ada penyitaan barang. <br />
                                    4. Persyaratan yang mudah.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseFour"
                                >
                                    Apakah Ummar sudah terdaftar di OJK?
                                </button>
                            </h2>
                            <div
                                id="flush-collapseFour"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour"
                                data-bs-parent="#accordionFlushExample"
                            >
                                <div class="accordion-body text-secondary">
                                    Untuk saat ini masih belum terdaftar dalam OJK(Otoritas Jasa
                                    Keuangan). Ummar merupakan platform jual beli barang dengan
                                    sistem kredit syariah, bukan merupakan perusahaan yang dapat
                                    digunakan untuk melakukan peminjaman online (pinjol). Ummar
                                    tidak melayani peminjaman uang dalam bentuk apapun. Ummar
                                    tidak memerlukan izin OJK dalam menjalankan operasionalnya,
                                    karena bukan merupakan perusahaan pembiayaan. Namun tidak
                                    menutup kemungkinan akan terdaftar di OJK dalam waktu dekat,
                                    agar dapat menjalankan operasional dengan lebih maksimal.
                                </div>
                            </div>
                        </div>
                        <!-- End Tentang Ummar -->

                        <!-- Pendaftaran -->
                        <h4 class="text-center mt-5">Pendaftaran</h4>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSatu">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSatu"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseSatu"
                                >
                                    Cara Pengajuan Kredit?
                                </button>
                            </h2>
                            <div
                                id="flush-collapseSatu"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSatu"
                                data-bs-parent="#accordionFlushExample"
                            >
                                <div class="accordion-body text-secondary">
                                    1. Isi form pengajuan kredit melalui form berikut :
                                    <a href="/ummar/offer"
                                    >Form Pengajuan Kredit</a
                                    >. <br />
                                    2. Isi identitas pribadi sesuai dengan data diri. <br />
                                    3. Upload dokumen pribadi. <br />
                                    4. Konfirmasikan pengajuan kredit ke bagian admin kami
                                    melalui WhatsApp(WA)
                                    <a href="https://wa.me/085859763455" target="_blank"
                                    >085859763455</a
                                    >. <br />
                                    5. Insya Allah akan kami proses dan akan kami hubungi dalam
                                    waktu dekat untuk tahap selanjutnya.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingDua">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseDua"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseDua"
                                >
                                    Kriteria atau Syarat?
                                </button>
                            </h2>
                            <div
                                id="flush-collapseDua"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-headingDua"
                                data-bs-parent="#accordionFlushExample"
                            >
                                <div class="accordion-body text-secondary">
                                    Syarat Dokumen : <br />
                                    1. KTP. <br />
                                    2. Kartu Keluarga. <br />
                                    3. Mutasi rekening 3 bulan terakhir. <br />
                                    4. Surat keterangan kerja.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTiga">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTiga"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseTiga"
                                >
                                    Cabang Ummar ada dimana saja?
                                </button>
                            </h2>
                            <div
                                id="flush-collapseTiga"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTiga"
                                data-bs-parent="#accordionFlushExample"
                            >
                                <div class="accordion-body text-secondary">
                                    Untuk sementara kami tidak memiliki kantor cabang. Jika
                                    ingin mengunjungi kantor kami bisa ke alamat Jalan Ciliwung
                                    No 73, Kelurahan Sawunggaling, Kecamatan Wonokromo,
                                    Surabaya.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEmpat">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseEmpat"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseEmpat"
                                >
                                    Apakah data yang saya input atau kirimkan di Ummar terjamin
                                    keamanannya?
                                </button>
                            </h2>
                            <div
                                id="flush-collapseEmpat"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-headingEmpat"
                                data-bs-parent="#accordionFlushExample"
                            >
                                <div class="accordion-body text-secondary">
                                    Tujuan kami memberikan kontribusi yang baik dalam
                                    perkembangan sistem ekonomi syariah di Indonesia dengan
                                    mematuhi dan mengikuti peraturan agama maupun pemerintah
                                    agar terciptanya sistem yang baik sesuai ajaran islam. Data
                                    yang anda berikan merupakan sebuah amanah yang harus kami
                                    jaga keamanannya.
                                </div>
                            </div>
                        </div>
                        <!-- End Pendaftaran -->

                        <!-- Produk -->
                        <h4 class="text-center mt-5">Produk</h4>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOneProduk">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOneProduk"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseOneProduk"
                                >
                                    Di toko mana saja barang yang bisa dibeli?
                                </button>
                            </h2>
                            <div
                                id="flush-collapseOneProduk"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOneProduk"
                                data-bs-parent="#accordionFlushExample"
                            >
                                <div class="accordion-body text-secondary">
                                    Customer akan diberikan formulir untuk kelengkapan pengisian
                                    produk yang akan dibeli. Barang yang bisa dibeli, jika toko
                                    dari produk yang diajukan masih dapat dijangkau oleh Ummar.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwoProduk">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwoProduk"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseTwoProduk"
                                >
                                    Apakah boleh retur atau mengembalikan barang yang uangnya
                                    telah diterima?
                                </button>
                            </h2>
                            <div
                                id="flush-collapseTwoProduk"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwoProduk"
                                data-bs-parent="#accordionFlushExample"
                            >
                                <div class="accordion-body text-secondary">
                                    Anda boleh melakukan pengembalian barang asalkan sesuai
                                    dengan ketentuan perusahaan : <br />
                                    1. Barangnya tidak sesuai dengan pemesanan. <br />
                                    2. Barang yang diterima rusak/tidak berfungsi. <br />
                                    3. Barang cacat/hilang. <br />
                                    4. Dan ketentuan perusahaan lainnya. <br /><br />
                                    Untuk lebih jelasnya dapat dikoordinasikan lebih lanjut
                                    dengan kami.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThreeProduk">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThflush-headingThreeProduk"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseThflush-headingThreeProduk"
                                >
                                    Bagaimana cara retur atau mengembalikan barang yang telah
                                    saya beli?
                                </button>
                            </h2>
                            <div
                                id="flush-collapseThflush-headingThreeProduk"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThreeProduk"
                                data-bs-parent="#accordionFlushExample"
                            >
                                <div class="accordion-body text-secondary">
                                    Jika barang tersebut memenuhi kualifikasi perusahaan untuk
                                    diretur maka akan diproses lebih lanjut. Caranya jika ada
                                    keluhan atau masalah tentang produk yang anda beli silahkan
                                    kirim pesan melalui customer service atau email ke
                                    <a href="mailto:ummar.id.syariah@gmail.com"
                                    >ummar.id.syariah@gmail.com</a
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFourProduk">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThflush-headingFourProduk"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseThflush-headingFourProduk"
                                >
                                    Apa saya bisa mendapatkan pinjaman uang, pendanaan, atau
                                    permodalan usaha dari Ummar?
                                </button>
                            </h2>
                            <div
                                id="flush-collapseThflush-headingFourProduk"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFourProduk"
                                data-bs-parent="#accordionFlushExample"
                            >
                                <div class="accordion-body text-secondary">
                                    Ummar bukanlah lembaga pembiayaan ataupun keuangan yang
                                    dapat memberikan bantuan berupa peminjaman uang, pendanaan,
                                    ataupun permodalan usaha bagi nasabahnya.
                                </div>
                            </div>
                        </div>
                        <!-- End Produk -->

                        <!-- Cicilan -->
                        <h4 class="text-center mt-5">Cicilan</h4>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOneCicilan">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOneCicilan"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseOneCicilan"
                                >
                                    Berapa limit cicilan perbulan saya?
                                </button>
                            </h2>
                            <div
                                id="flush-collapseOneCicilan"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOneCicilan"
                                data-bs-parent="#accordionFlushExample"
                            >
                                <div class="accordion-body text-secondary">
                                    Kami membatasi limit cicilan dengan batasan 5 - 10 juta.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwoCicilan">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwoCicilan"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseTwoCicilan"
                                >
                                    Apakah saya bisa mengajukan cicilan lebih dari satu?
                                </button>
                            </h2>
                            <div
                                id="flush-collapseTwoCicilan"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwoCicilan"
                                data-bs-parent="#accordionFlushExample"
                            >
                                <div class="accordion-body text-secondary">
                                    Untuk melakukan cicilan produk lebih dari satu, harus
                                    melalui tahapan seleksi atau verivikasi terlebih dahulu
                                    dengan tim kami. Jika hasil kalkulasinya memungkinkan, maka
                                    akan diperbolehkan untuk mengambil cicilan produk lebih dari
                                    satu.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThreeCicilan">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThflush-headingThreeCicilan"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseThflush-headingThreeCicilan"
                                >
                                    Apakah bisa melakukan pembatalan cicilan setelah melakukan
                                    pemesanan?
                                </button>
                            </h2>
                            <div
                                id="flush-collapseThflush-headingThreeCicilan"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThreeCicilan"
                                data-bs-parent="#accordionFlushExample"
                            >
                                <div class="accordion-body text-secondary">
                                    Bisa, yang nantinya akan melalui prosedur dan ketentuan dari
                                    perusahaan.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFourCicilan">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThflush-headingFourCicilan"
                                    aria-expanded="false"
                                    aria-controls="flush-collapseThflush-headingFourCicilan"
                                >
                                    Apakah ada bunga atau biaya yang terkait dengan cicilan?
                                </button>
                            </h2>
                            <div
                                id="flush-collapseThflush-headingFourCicilan"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFourCicilan"
                                data-bs-parent="#accordionFlushExample"
                            >
                                <div class="accordion-body text-secondary">
                                    Kami tidak mengenakan sistem bunga disetiap cicilan. Namun
                                    kami mengenakan margin penjualan atas harga barang yang Anda
                                    pesan. Margin penjualan disesuaikan dengan jangka waktu
                                    cicilan yang dipilih. <br />
                                    Biaya yang wajib dibayar hanyalah cicilan rutin sesuai
                                    dengan info yang kami berikan di website dan email. Kami
                                    tidak memungut biaya apapun diluar biaya cicilan yang telah
                                    dipilih.
                                    <br />
                                    <br />
                                    Tidak ada biaya bunga, biaya denda, hingga penyitaan barang.
                                </div>
                            </div>
                        </div>
                        <!-- End Cicilan -->
                    </div>
                    <!-- End Accordion -->
                </div>
            </div>
        </div>
        <!-- Service End -->
    </main>
@endsection
