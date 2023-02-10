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
    <body style="overflow-x: hidden">

    <main>

        <div class="p-3 row">
            <div class="col d-flex justify-content-between">
                <a href="/ummar/product" class="btn btn-outline-primary rounded-pill py-2 px-4">Back to Web</a>
                <h2 class="text-center">Hai {{ \Illuminate\Support\Facades\Auth::user()->name }} !</h2>
            </div>
        </div>

        <div class="form-offer header">
            <div class="row justify-content-center">
                <div class="col-8 col-md-5 mt-5">
                    <form action="/ummar/saveoffer" method="POST">
                        @csrf
                        <h1 class="h3 my-3 fw-bold text-white text-center">Form Pemesanan Barang</h1>
                        <hr>
                        <h4 class="fw-normal text-white">Data Diri</h4>
                        <ul class="text-white">
                            <li>Silahkan isi data diri dibawah ini dengan sebenar-sebenarnya</li>
                            <li>Isi detail barang yang akan diajukan untuk dibeli.</li>
                            <li>Terima kasih sudah mengisi dengan baik dan sebenar-benarnya. Kami menjamin data yang diupload tidak akan kami sebar luaskan.</li>
                        </ul>
                        <hr>

                        <div class="form-floating">
                            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="username" value="{{ old('name') }}" required>
                            <label for="name">Nama Lengkap</label>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="idacc" class="form-control @error('idacc') is-invalid @enderror" id="idacc" placeholder="ID Accoun6" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}" readonly required style="cursor: not-allowed">
                            <label for="idacc">ID Akun</label>
                            @error('idacc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control rounded-0 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                            <label for="email">Alamat Email</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="userexample" value="{{ old('nik') }}" required>
                            <label for="name">NIK (Nomor Induk Kependudukan)</label>
                            @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="alamatktp" class="form-control @error('alamatktp') is-invalid @enderror" id="alamatktp" placeholder="alamat ktp" value="{{ old('alamatktp') }}" required>
                            <label for="name">Alamat Sesuai KTP</label>
                            @error('alamatktp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="alamat" value="{{ old('alamat') }}" required>
                            <label for="name">Alamat Tinggal</label>
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" placeholder="pekerjaan" value="{{ old('pekerjaan') }}" required>
                            <label for="pekerjaan">Pekerjaan</label>
                            @error('pekerjaan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="telp" class="form-control @error('telp') is-invalid @enderror" id="telp" placeholder="nomor telepon" value="{{ old('telp') }}" required>
                            <label for="telp">Nomor Telepon</label>
                            @error('telp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="perusahaan" class="form-control @error('perusahaan') is-invalid @enderror" id="perusahaan" placeholder="nama perusahaan" value="{{ old('perusahaan') }}" required>
                            <label for="perusahaan">Nama Perusahaan Bekerja</label>
                            @error('perusahaan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="alamatkantor" class="form-control @error('alamatkantor') is-invalid @enderror" id="alamatkantor" placeholder="alamat kantor" value="{{ old('alamatkantor') }}" required>
                            <label for="alamatkantor">Alamat Kantor</label>
                            @error('alamatkantor')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="input-group my-2">
                            <label class="input-group-text @error('lamakerja') is-invalid @enderror" for="lamakerja">Lama Bekerja</label>
                            <select class="form-select" id="lamakerja" name="lamakerja" required>
                                <option selected>Pilih...</option>
                                <option value="Kurang Dari 1 tahun">Kurang Dari 1 Tahun</option>
                                <option value="1 tahun">1 Tahun</option>
                                <option value="Lebih Dari 1 tahun">Lebih Dari 1 Tahun</option>
                            </select>
                            @error('lamakerja')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="input-group my-1">
                            <span class="input-group-text my-1">Rp.</span>
                            <input type="text" name="gaji" id="gaji" placeholder="Nominal Gaji..." class="form-control @error('gaji') is-invalid @enderror" required>
                            <span class="input-group-text my-1">.00</span>
                            @error('gaji')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="telpkantor" class="form-control @error('telpkantor') is-invalid @enderror" id="telpkantor" placeholder="nomor telepon kantor" value="{{ old('telpkantor') }}" required>
                            <label for="telpkantor">Nomor Telepon Perusahaan</label>
                            @error('telpkantor')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="telpdarurat" class="form-control @error('telpdarurat') is-invalid @enderror" id="telpdarurat" placeholder="nomor telepon darurat" value="{{ old('telpdarurat') }}" required>
                            <label for="telpdarurat">Nomor Telepon Darurat</label>
                            @error('telpdarurat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="jenisbarang" class="form-control @error('jenisbarang') is-invalid @enderror" id="jenisbarang" placeholder="Handphone, TV, Peralatan Rumah Tangga, dll..." value="{{ old('jenisbarang') }}" required>
                            <label for="jenisbarang">Jenis Barang Yang Dibeli <span class="text-muted fw-lighter">(Contoh : Handphone)</span></label>
                            @error('jenisbarang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="merk" class="form-control @error('merk') is-invalid @enderror" id="merk" placeholder="Samsung, Apple, LG, Sony, dll..." value="{{ old('merk') }}" required>
                            <label for="merk">Nama Merk Barang</label>
                            @error('merk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <div class="d-flex justify-content-center">
                                <textarea name="spek" id="spek" class="spek @error('spek') is-invalid @enderror" placeholder="Spesifikasi Barang (cantumkan spesifikasi dengan rinci)" rows="5"></textarea>
                            </div>
                            @error('spek')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="ref" class="form-control @error('ref') is-invalid @enderror rounded-bottom" id="ref" placeholder="Referensi pengajuan kredit..." value="{{ old('ref') }}">
                            <label for="ref">Referensi Pengajuan Kredit <span class="text-muted fw-lighter">(Cantumkan Nama)</span></label>
                            @error('ref')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button class="w-100 btn btn-lg btn-success mt-3" type="submit">Kirim</button>
                        <p class="mt-3 mb-3 text-center text-white">&copy; 2021–2022</p>

                    </form>

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
        </div>

    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </body>
    </html>


</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
