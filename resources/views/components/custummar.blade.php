@extends('layouts.dashboard')

@section('container')
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center text-white">
        <div class="table-container-accusers mt-5 d-flex justify-content-between">
            <div>
                <p class="fs-3">Data Customers Ummar :</p>
            </div>
            <div>
                <button class="btn btn-primary" onclick="window.location='/ummar/custummar/add'">Add New Users</button>
            </div>
        </div>

        @if(session('msg'))
            <div class="bg-primary p-2 my-2">
                {{ session('msg') }}
            </div>
        @endif

        <div class="table-container-accusers table-data">
            <table class="table table-bordered my-5" style="width: max-content">
                <thead class="table-primary text-center">
                <tr class="table-primary text-center">
                    <th scope="col">Actions</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">ID Akun</th>
                    <th scope="col">Email</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Alamat KTP</th>
                    <th scope="col">Alamat Tinggal</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Nama Perusahaan Bekerja</th>
                    <th scope="col">Alamat Kantor</th>
                    <th scope="col">Lama Bekerja</th>
                    <th scope="col">Nominal Gaji</th>
                    <th scope="col">Telepon Kantor</th>
                    <th scope="col">Telepon Darurat</th>
                    <th scope="col">Barang Yang Dibeli</th>
                    <th scope="col">Nama Merk Barang</th>
                    <th scope="col">Spesifikasi Barang</th>
                    <th scope="col">Referensi Pengajuan Kredit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dataCustomersUmmar as $d)
                    <tr>
                        <td class="d-flex justify-content-center align-items-center gap-2">
                            <button class="btn btn-info" onclick="window.location='/ummar/custummar/edit/{{ $d->id }}'" >Edit</button>
                            <form action="/ummar/custummar/delete/{{ $d->id }}" method="POST" onsubmit="return hapusData()">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                        <td class="text-center">{{ $d->id }}</td>
                        <td class="text-center">{{ $d->name }}</td>
                        <td class="text-center">{{ $d->idacc }}</td>
                        <td class="text-center">{{ $d->email }}</td>
                        <td class="text-center">{{ $d->nik }}</td>
                        <td class="text-center">{{ $d->alamatktp }}</td>
                        <td class="text-center">{{ $d->alamat }}</td>
                        <td class="text-center">{{ $d->pekerjaan }}</td>
                        <td class="text-center">{{ $d->telp }}</td>
                        <td class="text-center">{{ $d->perusahaan }}</td>
                        <td class="text-center">{{ $d->alamatkantor }}</td>
                        <td class="text-center">{{ $d->lamakerja }}</td>
                        <td class="text-center">Rp.{{ $d->gaji }}</td>
                        <td class="text-center">{{ $d->telpkantor }}</td>
                        <td class="text-center">{{ $d->telpdarurat }}</td>
                        <td class="text-center">{{ $d->jenisbarang }}</td>
                        <td class="text-center">{{ $d->merk }}</td>
                        <td class="text-center">{{ $d->spek }}</td>
                        <td class="text-center">{{ $d->ref }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
