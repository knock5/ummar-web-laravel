@extends('layouts.dashboard')

@section('container')
    <div class="container-fluid p-3">
        <div class="d-flex justify-content-center align-items-center my-3">
            <button class="btn btn-secondary" onclick="window.location='/ummar/custummar'">&laquo Kembali</button>
        </div>

        <div class="col-md-8 m-auto p-2 border">
            @if(session('msg'))
                {{ session('msg') }}
            @endif
            <form class="" method="POST" action="{{ url('/ummar/custummar/save') }}">
                @csrf
                <div class="col-6 my-2 mx-auto">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="col-md-6 my-2 mx-auto">
                    <label for="idacc" class="form-label">ID Account</label>
                    <select class="form-select" aria-label="Default select example" name="idacc" required>
                        <option selected></option>
                        @foreach($dataAccount as $d)
                            <option value="{{ $d->id }}">{{ $d->id }} - {{ $d->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 my-2 mx-auto">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="col-6 my-2 mx-auto">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" name="nik" required>
                </div>
                <div class="col-md-6 my-2 mx-auto">
                    <label for="alamatktp" class="form-label">Alamat KTP</label>
                    <input type="text" class="form-control" name="alamatktp" required>
                </div>
                <div class="col-md-6 my-2 mx-auto">
                    <label for="alamat" class="form-label">Alamat Tinggal</label>
                    <input type="text" class="form-control" name="alamat" required>
                </div>
                <div class="col-md-6 my-2 mx-auto">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan" required>
                </div>
                <div class="col-md-6 my-2 mx-auto">
                    <label for="telp" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" name="telp" required>
                </div>
                <div class="col-6 my-2 mx-auto">
                    <label for="perusahaan" class="form-label">Nama Perusahaan Bekerja</label>
                    <input type="text" class="form-control" name="perusahaan" required>
                </div>
                <div class="col-6 my-2 mx-auto">
                    <label for="alamatkantor" class="form-label">Alamat Kantor</label>
                    <input type="text" class="form-control" name="alamatkantor" required>
                </div>
                <div class="col-6 my-2 mx-auto">
                    <label for="lamakerja" class="form-label">Lama Bekerja</label>
                    <select name="lamakerja" id="lamakerja">
                        <option selected></option>
                        <option>
                            <hr class="dropdown-divider">
                        </option>
                        <option value="< 1 Tahun">Kurang Dari 1 Tahun</option>
                        <option value="1 Tahun">1 Tahun</option>
                        <option value="> 1 Tahun">Lebih Dari 1 Tahun</option>
                    </select>
                </div>
                <div class="col-md-6 my-2 mx-auto">
                    <label for="gaji" class="form-label">Nominal Gaji</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp.</span>
                        <input type="text" name="gaji" class="form-control" min="0" required>
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="col-6 my-2 mx-auto">
                    <label for="telpkantor" class="form-label">Telepon Kantor</label>
                    <input type="text" class="form-control" name="telpkantor" required>
                </div>
                <div class="col-6 my-2 mx-auto">
                    <label for="telpdarurat" class="form-label">Telepon Darurat</label>
                    <input type="text" class="form-control" name="telpdarurat" required>
                </div>
                <div class="col-6 my-2 mx-auto">
                    <label for="jenisbarang" class="form-label">Barang Yang Dibeli</label>
                    <input type="text" class="form-control" name="jenisbarang" required>
                </div>
                <div class="col-6 my-2 mx-auto">
                    <label for="merk" class="form-label">Nama Merk Barang</label>
                    <input type="text" class="form-control" name="merk" required>
                </div>
                <div class="col-6 my-2 mx-auto">
                    <label for="spek" class="form-label">Spesifikasi Barang</label>
                    <textarea name="spek" id="spek" class="spek" placeholder="Spesifikasi barang dengan rinci" rows="5" required></textarea>
                </div>
                <div class="col-6 my-2 mx-auto">
                    <label for="ref" class="form-label">Referensi Pengajuan Kredit (Nama)</label>
                    <input type="text" class="form-control" name="ref">
                </div>
                <div class="col-6 my-3 mx-auto d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
