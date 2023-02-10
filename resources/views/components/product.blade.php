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
                    Products
                </h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="/ummar">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->
    </header>

    <main>
        <!-- Product -->
        <div class="container-xxl-fluid bg-warning pt-5 pb-3">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="wow zoomIn mb-5 py-3" data-wow-delay="0.2s">
                        <p class="text-secondary text-center">
                            Kami sebagai layanan pembelian dengan metode kredit syariah selalu siap membantu anda dalam memenuhi
                            kebutuhan rumah tangga, barang-barang elektronik, ataupun kendaraan bermotor. Dengan menggunakan Ummar.id
                            proses pengajuan pinjaman anda akan menjadi lebih mudah. Kredit Syariah Tanpa Biaya Riba!
                        </p>
                    </div>
                </div>
            </div>


            <!-- Service Start -->
            <div class="container-xxl-fluid bg-warning py-5">
                <div class="container">
                    <div
                        class="text-center mx-auto wow fadeInUp"
                        data-wow-delay="0.1s"
                        style="max-width: 500px"
                    >
                        <h1 class="display-6 mb-5 text-secondary">
                            Kami Siap Membantu Anda Dalam Pembelian
                        </h1>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <img
                                    class="img-fluid"
                                    style="
                      border-top-left-radius: 10px;
                      border-top-right-radius: 10px;
                    "
                                    src="{{ asset('images/ummar/BG-Elektronik.jpg') }}"
                                    alt=""
                                />
                                <div class="d-flex align-items-center bg-secondary">
                                    <div class="service-icon flex-shrink-0 bg-secondary">
                                        <img class="img-fluid" src="{{ asset('images/icon/Smartphone.png') }}" alt=""/>
                                    </div>
                                    <p class="h4 mx-4 mb-0"
                                    >Smartphone & Peralatan Elektronik</p
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item">
                                <img
                                    class="img-fluid"
                                    style="
                      border-top-left-radius: 10px;
                      border-top-right-radius: 10px;
                    "
                                    src="{{ asset('images/ummar/BG-Livinghome.jpg') }}"
                                    alt=""
                                />
                                <div class="d-flex align-items-center bg-secondary">
                                    <div class="service-icon flex-shrink-0 bg-secondary">
                                        <img class="img-fluid" src="{{ asset('images/icon/Home.png') }}" alt=""/>
                                    </div>
                                    <p class="h4 mx-4 mb-0"
                                    >Barang Kebutuhan Rumah Tangga</p
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item">
                                <img
                                    class="img-fluid"
                                    style="
                      border-top-left-radius: 10px;
                      border-top-right-radius: 10px;
                    "
                                    src="{{ asset('images/ummar/BG-Motorbike.jpg') }}"
                                    alt=""
                                />
                                <div class="d-flex align-items-center bg-secondary">
                                    <div class="service-icon flex-shrink-0 bg-secondary">
                                        <img class="img-fluid" src="{{ asset('images/icon/motorbike.png') }}" alt=""/>
                                    </div>
                                    <p class="h4 mx-4 mb-0">Kendaraan Bermotor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @auth()
                    <div class="col mt-4 d-flex justify-content-center">
                        <a
                            href="/ummar/offer"
                            class="btn btn-warning py-3 px-5 rounded-pill wow fadeInUp" data-wow-delay="0.8s"
                        >Ajukan Pembelian</a>
                    </div>
                @else
                    <div class="modal" tabindex="-1" id="exampleModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Pesan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Silahkan login terlebih dahulu!</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Button trigger modal -->
                    <div class="col mt-4 d-flex justify-content-center">
                        <a
                            class="btn btn-warning offer py-3 px-5 rounded-pill wow fadeInUp" data-wow-delay="0.4s" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        >Ajukan Pembelian</a>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endauth

            </div>
            <!-- Service End -->

        </div>

    </main>
@endsection
