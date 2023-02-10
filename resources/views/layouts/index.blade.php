<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Ummar.id</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta
        name="keywords"
        content="kredit, cicilan, pembiayaan, proses mudah, tanpa sita, syariah"
    />
    <meta
        name="description"
        content="Kami adalah PT Rabbani Niaga Syariah atau Ummar.id merupakan perusahaan yang bergerak di bidang jasa jual beli kredit peralatan rumah tangga, alat-alat elektronik, kendaraan bermotor, dan lain-lain dengan sistem syariah"
    />

    <!-- Favicon -->
    <link href="{{ asset('images/ummar/ummar-logo-bg-white.jpg') }}" rel="icon"/>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;800&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        rel="stylesheet"
    />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
        rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/global/global.css') }}"/>

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
</head>

<body>
<!-- Spinner Start -->
@include('components.features.spinner')
<!-- Spinner End -->

<!-- Navbar Start -->
@include('partials.webnav')
<!-- Navbar End -->


<main>

    @yield('content')

</main>

<footer>
    @include('partials.webfooter')
</footer>

<!-- Button WA Fixed -->
@include('components.features.wabutton')

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/wayponts/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/parallax/parallax.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
