@extends('layouts.index')


@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid bg-primary p-0">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('images/ummar/BG-Home-Header.jpg') }}" alt="Image"/>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-4 animated slideInDown">
                                        Butuh Angsuran Tanpa Biaya Riba Untuk Kebutuhanmu?
                                    </h1>
                                    <p
                                        class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown"
                                    >
                                        Kami Siap Memberikan Layanan Kredit Barang Elektronik,
                                        Barang Kebutuhan Rumah Tangga, dan Kendaraan Bermotor
                                        Dengan Berbagai Kemudahan
                                    </p>
                                    <a
                                        href="#kirimpesan"
                                        class="btn btn-primary text-dark py-3 px-5 rounded-pill animated slideInDown"
                                    >Hubungi Kami <i class="bi bi-arrow-down-short"></i
                                        ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl-fluid bg-primary py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1
                            class="display-6 mb-3 text-warning"
                            style="text-shadow: 0px 0px 3px rgba(0, 0, 0, 0.8)"
                        >
                            Selamat Datang di Ummar
                        </h1>
                        <p class="mb-4 text-dark">
                            Kami merupakan perusahaan yang bergerak di bidang perdagangan
                            umum, yang melayani barang maupun jasa. <br/>
                            Kami berkomitmen menjalankan kegiatan bisnis syariah secara
                            profesional. Berorientasi pada kepentingan pelanggan, agar dapat
                            berperan dalam memberikan nilai tambah bagi kemajuan dan
                            kesejateraan bersama.
                        </p>
                        <div class="border-top mt-4 pt-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex align-items-center mb-3">
                                        <div
                                            class="btn-lg-square bg-secondary rounded-circle me-3"
                                        >
                                            <i class="fa fa-phone-alt text-white"></i>
                                        </div>
                                        <h5 class="mb-0 text-secondary">+62 858 5976 3455</h5>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="btn-lg-square bg-secondary rounded-circle me-3"
                                        >
                                            <i class="fa fa-envelope text-white"></i>
                                        </div>
                                        <h5 class="mb-0 text-secondary">
                                            ummar.id.syariah@gmail.com
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img
                                class="img-fluid w-75 wow zoomIn rounded-circle"
                                data-wow-delay="0.1s"
                                src="{{ asset('images/ummar/BG-Home-Header-5.jpg') }}"
                                style="margin-top: 25%"
                            />
                        </div>
                        <div class="col-6 text-start">
                            <img
                                class="img-fluid w-75 wow zoomIn rounded-circle"
                                data-wow-delay="0.3s"
                                src="{{ asset('images/ummar/BG-Home-Header-8.jpg') }}"
                            />
                        </div>
                        <div class="col-4 text-end"></div>
                        <div class="col-8 text-start">
                            <img
                                class="img-fluid w-50 wow zoomIn"
                                style="border-radius: 30px"
                                data-wow-delay="0.7s"
                                src="{{ asset('images/ummar/BG-Home-Header-7.jpg') }}"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-xxl-fluid bg-primary py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1
                        class="display-6 mb-3 text-warning"
                        style="text-shadow: 0px 0px 3px rgba(0, 0, 0, 0.8)"
                    >
                        Mengapa Harus Ummar ?
                    </h1>
                    <p class="mb-5 text-dark">
                        Kami memberikan solusi nyaman dan aman. Dengan mendukung
                        berkembangnya <strong>Ekonomi Syariah</strong> yang ada di
                        <strong>Indonesia</strong>.
                    </p>
                    <div class="d-flex mb-5">
                        <div
                            class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                            style="width: 90px; height: 90px"
                        >
                            <img class="img-fluid" src="{{ asset('images/icon/Logo-Syari.png') }}" alt="logo-syari"/>
                        </div>
                        <div class="ms-4 text-dark">
                            <h5 class="mb-1 mt-2 text-dark">Kredit Syariah</h5>
                            <span
                            >Kami menggunakan akad Murabahah dalam sistem
                      pembiayaan.</span
                            >
                        </div>
                    </div>
                    <div class="d-flex mb-5">
                        <div
                            class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                            style="width: 90px; height: 90px"
                        >
                            <img
                                class="img-fluid"
                                src="{{ asset('images/icon/icon-10-light.png') }}"
                                alt=""
                            />
                        </div>
                        <div class="ms-4 text-dark">
                            <h5 class="mb-1 mt-2 text-dark">Benefit Pembiayaan</h5>
                            <span
                            >Berbagai benefit kami berikan dari kemudahan pengajuan,
                      hingga tanpa adanya biaya bunga kredit maupun penyitaan
                      barang.</span
                            >
                        </div>
                    </div>
                    <div class="d-flex mb-0">
                        <div
                            class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                            style="width: 90px; height: 90px"
                        >
                            <img
                                class="img-fluid"
                                src="{{ asset('images/icon/icon-08-light.png') }}"
                                alt=""
                            />
                        </div>
                        <div class="ms-4 text-dark">
                            <h5 class="mb-1 mt-2 text-dark">Pelayanan Bersahabat</h5>
                            <span
                            >Kami mengedepankan kenyamanan berkomunikasi dengan
                      pelanggan.</span
                            >
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div
                        class="position-relative rounded overflow-hidden h-100"
                        style="min-height: 400px"
                    >
                        <img
                            class="position-absolute w-100 h-100"
                            src="{{ asset('images/ummar/BG-Home-Header-6.jpg') }}"
                            alt=""
                            style="object-fit: cover; border-radius: 15px"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Quote Start -->
    <div id="kirimpesan">
        <div class="container-fluid overflow-hidden px-lg-0">
            <div class="container quote px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div
                        class="col-lg-6 quote-text"
                        data-parallax="scroll"
                        data-image-src="{{ asset('images/ummar/BG-Home-Header-2.jpg') }}"
                    >
                        <div
                            class="h-100 px-4 px-sm-5 ps-lg-0 wow fadeIn"
                            data-wow-delay="0.1s"
                        >
                            <h1 class="text-white mb-2">Kontak Kami</h1>
                            <p class="text-white mb-5">
                                Mari bergabung bersama kami, cara pengajuannya sangat mudah
                                dan aman. <br/>
                                Mari ciptakan masyarakat dengan transaksi ekonomi syariah yang
                                lebih kuat lagi bersama kami!
                            </p>
                        </div>
                    </div>
                    <div
                        class="col-lg-6 quote-form"
                        data-parallax="scroll"
                        data-image-src="{{ asset('images/ummar/BG-Home-Header.jpg') }}"
                    >
                        <!-- Form -->
                        <form action="https://formspree.io/f/mdojqdzy" method="POST">
                            <div
                                class="h-100 px-4 px-sm-5 pe-lg-0 wow fadeIn"
                                data-wow-delay="0.5s"
                            >
                                <div class="bg-primary p-4 p-sm-5 rounded-form">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="gname"
                                                    placeholder="Gurdian Name"
                                                    name="name"
                                                    required
                                                />
                                                <label for="gname">Nama</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    id="gmail"
                                                    placeholder="Gurdian Email"
                                                    name="email"
                                                    required
                                                />
                                                <label for="gmail">Email</label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating">
                              <textarea
                                  class="form-control"
                                  placeholder="Leave a message here"
                                  id="message"
                                  style="height: 80px"
                                  name="message"
                                  required
                              ></textarea>
                                                <label for="message">Pertanyaan</label>
                                            </div>
                                        </div>
                                        <div
                                            class="col-12 d-flex align-items-center justify-content-center"
                                        >
                                            <button
                                                class="btn btn-primary text-secondary rounded-pill py-3 px-5"
                                                style="box-shadow: 0px 0px 7px 0px rgba(0, 0, 0, 0.5)"
                                                type="submit"
                                            >
                                                Kirim
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

    <!-- Testimonial Start -->
    <!-- <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <h1 class="display-6 mb-5">What They Say About Our Services</h1>
        </div>
        <div class="row g-5">
          <div class="col-lg-3 d-none d-lg-block">
            <div class="testimonial-left h-100">
              <img
                class="img-fluid animated pulse infinite"
                src="img/testimonial-1.jpg"
                alt=""
              />
              <img
                class="img-fluid animated pulse infinite"
                src="img/testimonial-2.jpg"
                alt=""
              />
              <img
                class="img-fluid animated pulse infinite"
                src="img/testimonial-3.jpg"
                alt=""
              />
            </div>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="owl-carousel testimonial-carousel">
              <div class="testimonial-item text-center">
                <img
                  class="img-fluid mx-auto mb-4"
                  src="img/testimonial-1.jpg"
                  alt=""
                />
                <p class="fs-5">
                  Dolores sed duo clita tempor justo dolor et stet lorem kasd
                  labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                  et labore et tempor diam tempor erat.
                </p>
                <h5>Client Name</h5>
                <span>Profession</span>
              </div>
              <div class="testimonial-item text-center">
                <img
                  class="img-fluid mx-auto mb-4"
                  src="img/testimonial-2.jpg"
                  alt=""
                />
                <p class="fs-5">
                  Dolores sed duo clita tempor justo dolor et stet lorem kasd
                  labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                  et labore et tempor diam tempor erat.
                </p>
                <h5>Client Name</h5>
                <span>Profession</span>
              </div>
              <div class="testimonial-item text-center">
                <img
                  class="img-fluid mx-auto mb-4"
                  src="img/testimonial-3.jpg"
                  alt=""
                />
                <p class="fs-5">
                  Dolores sed duo clita tempor justo dolor et stet lorem kasd
                  labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                  et labore et tempor diam tempor erat.
                </p>
                <h5>Client Name</h5>
                <span>Profession</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 d-none d-lg-block">
            <div class="testimonial-right h-100">
              <img
                class="img-fluid animated pulse infinite"
                src="img/testimonial-1.jpg"
                alt=""
              />
              <img
                class="img-fluid animated pulse infinite"
                src="img/testimonial-2.jpg"
                alt=""
              />
              <img
                class="img-fluid animated pulse infinite"
                src="img/testimonial-3.jpg"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Testimonial End -->
@endsection
