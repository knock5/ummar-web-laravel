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
                    Contact Us
                </h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Contact
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->
    </header>

    <main>
        <!-- Contact Start -->
        <div class="container-xxl-fluid bg-warning py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <h1 class="display-6 mb-5 text-dark">Punya pertanyaan, Silahkan Hubungi kami!</h1>
                        <p class="mb-4 text-secondary">
                            Jika anda mempunyai pertanyaan ataupun masukan kepada kami, atau
                            juga pertanyaan lebih lanjut tentang bagaimana cara kerja kami,
                            apa persyaratan yang dibutuhkan untuk memenuhi jasa jual beli
                            kredit kami. Informasi lebih lanjut bisa anda dapatkan dengan
                            menghubungi kami melalui email di bawah ini atau bisa juga
                            melalui WhatsApp dan instagram kami.
                        </p>

                        <!-- Form -->
                        <form
                            class="contact-form"
                            action="https://formspree.io/f/mdojqdzy"
                            method="POST"
                        >
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input
                                            type="text"
                                            class="form-control rounded-pill"
                                            id="name"
                                            placeholder="Your Name"
                                            name="name"
                                            required
                                        />
                                        <label for="name">Nama</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating rounded-pill">
                                        <input
                                            type="email"
                                            class="form-control rounded-pill"
                                            id="email"
                                            placeholder="Your Email"
                                            name="email"
                                            required
                                        />
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input
                                            type="text"
                                            class="form-control rounded-pill"
                                            id="subject"
                                            placeholder="Subject"
                                            name="subject"
                                            required
                                        />
                                        <label for="subject">Subjek</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                      <textarea
                          class="form-control"
                          placeholder="Leave a message here"
                          id="message"
                          style="height: 100px; border-radius: 12px;"
                          name="message"
                          required
                      ></textarea>
                                        <label for="message">Pertanyaan</label>
                                    </div>
                                </div>
                                <div class="col-12 d-flex align-items-center justify-content-center" style="box-sizing: border-box;">
                                    <button
                                        class="sendBtn btn btn-secondary rounded-pill py-3 px-5"
                                        type="submit"
                                    >
                                        Kirim
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div
                        class="col-lg-6 wow fadeIn"
                        data-wow-delay="0.5s"
                        style="min-height: 450px"
                    >
                        <div class="position-relative overflow-hidden h-100">
                            <iframe
                                class="position-relative w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.51942375813!2d112.7314906147151!3d-7.295386894734538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb972961a28f%3A0x38cfeb2031c3fc4d!2sJl.%20Ciliwung%20No.73%2C%20Darmo%2C%20Kec.%20Wonokromo%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060241!5e0!3m2!1sen!2sid!4v1664988062595!5m2!1sen!2sid"
                                frameborder="0"
                                style="min-height: 450px; border: 0; border-radius: 15px;"
                                allowfullscreen=""
                                aria-hidden="false"
                                tabindex="0"
                                referrerpolicy="no-referrer-when-downgrade"
                                loading="lazy"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    </main>
@endsection
