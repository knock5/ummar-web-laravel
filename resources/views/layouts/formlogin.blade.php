<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ummar id</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{--    Icon Bootstrap--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

{{--    css local--}}
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body>

<main>
    <div class="form-signin header">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-8 col-md-5 mt-5">
                @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="/ummar/login" method="POST">
                    @csrf
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/ummar/ummar-logo-bg-non.png') }}" alt="" width="50%">
                    </div>
                    <h1 class="h3 mb-3 fw-normal text-center text-white">Please Login</h1>

                    <div class="form-floating">
                        <input type="text" name="name" class="form-control form-signin @error('name') is-invalid @enderror" id="name" placeholder="userexample" value="{{ old('name') }}" autofocus required>
                        <label for="name">Username</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control form-signin" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <button class="mt-3 w-100 btn btn-lg btn-success" type="submit">Login</button>
                    <p class="mt-3 mb-3 text-center text-white">&copy; 2021–2022</p>
                </form>

                <small class="d-block text-center text-white mt-3">Not registered? <a href="/ummar/register" class="text-info text-decoration-none">Register Now!</a> </small>

                    <small class="d-block text-center text-white mt-3">Not ready for register now? <a href="/ummar" class="text-info text-decoration-none">Continue without login!</a></small>

            </div>
        </div>

        <div class="mb-0">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
    </div>



</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
