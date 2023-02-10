<?php

namespace App\Http\Controllers;

use App\Models\AccUsersUmmarModel;
use App\Models\CustUmmar;
use Illuminate\Http\Request;

class CustUmmarController extends Controller
{
    public function indexCustUmmar()
    {
        $data = [
            'dataCustomersUmmar' => CustUmmar::all(),
            'title' => 'Data Customers'
        ];
        return View('components.custummar', $data);
    }

    public function addCustUmmar()
    {
        return view('components.form.datacustomers.addcustummar', [
            'title' => 'Data Customers',
            'dataAccount' => AccUsersUmmarModel::all()
        ]);
    }

    public function saveCustUmmar(Request $r)
    {
        $fullname = $r->name;
        $account_id = $r->idacc;
        $email = $r->email;
        $nik = $r->nik;
        $alamat_ktp = $r->alamatktp;
        $alamat = $r->alamat;
        $pekerjaan = $r->pekerjaan;
        $telepon = $r->telp;
        $nama_perusahaan = $r->perusahaan;
        $alamat_kantor = $r->alamatkantor;
        $lama_bekerja = $r->lamakerja;
        $nominal_gaji = $r->gaji;
        $telp_kantor = $r->telpkantor;
        $telp_darurat = $r->telpdarurat;
        $jenis_barang = $r->jenisbarang;
        $nama_merk = $r->merk;
        $spesifikasi = $r->spek;
        $referensi = $r->ref;

        try {
            $ummar = new CustUmmar();
            $ummar->name = $fullname;
            $ummar->idacc = $account_id;
            $ummar->email = $email;
            $ummar->nik = $nik;
            $ummar->alamatktp = $alamat_ktp;
            $ummar->alamat = $alamat;
            $ummar->pekerjaan = $pekerjaan;
            $ummar->telp = $telepon;
            $ummar->perusahaan = $nama_perusahaan;
            $ummar->alamatkantor = $alamat_kantor;
            $ummar->lamakerja = $lama_bekerja;
            $ummar->gaji = $nominal_gaji;
            $ummar->telpkantor = $telp_kantor;
            $ummar->telpdarurat = $telp_darurat;
            $ummar->jenisbarang = $jenis_barang;
            $ummar->merk = $nama_merk;
            $ummar->spek = $spesifikasi;
            $ummar->ref = $referensi;
            $ummar->save();

            $r->session()->flash('msg', "New customer has been added");
            return redirect()->back();
        } catch (\Throwable $e) {
            dd($e);
        }
    }

    public function editCustUmmar($id)
    {
        $ummar = CustUmmar::find($id);
        $data = [
            'title' => 'Data Customers',
            'dataAccount' => AccUsersUmmarModel::all(),

            'id' => $id,
            'name' => $ummar->name,
            'idacc' => $ummar->idacc,
            'email' => $ummar->email,
            'nik' => $ummar->nik,
            'alamatktp' => $ummar->alamatktp,
            'alamat' => $ummar->alamat,
            'pekerjaan' => $ummar->pekerjaan,
            'telp' => $ummar->telp,
            'perusahaan' => $ummar->perusahaan,
            'alamatkantor' => $ummar->alamatkantor,
            'lamakerja' => $ummar->lamakerja,
            'gaji' => $ummar->gaji,
            'telpkantor' => $ummar->telpkantor,
            'telpdarurat' => $ummar->telpdarurat,
            'jenisbarang' => $ummar->jenisbarang,
            'merk' => $ummar->merk,
            'spek' => $ummar->spek,
            'ref' => $ummar->ref,
        ];

        return View('components.form.datacustomers.editcustummar', $data);
    }

    public function updateCustUmmar(Request $r)
    {
        $id = $r->id;
        $fullname = $r->name;
        $account_id = $r->idacc;
        $email = $r->email;
        $nik = $r->nik;
        $alamat_ktp = $r->alamatktp;
        $alamat = $r->alamat;
        $pekerjaan = $r->pekerjaan;
        $telepon = $r->telp;
        $nama_perusahaan = $r->perusahaan;
        $alamat_kantor = $r->alamatkantor;
        $lama_bekerja = $r->lamakerja;
        $nominal_gaji = $r->gaji;
        $telp_kantor = $r->telpkantor;
        $telp_darurat = $r->telpdarurat;
        $jenis_barang = $r->jenisbarang;
        $nama_merk = $r->merk;
        $spesifikasi = $r->spek;
        $referensi = $r->ref;

        try {
            $ummar = CustUmmar::find($id);
            $ummar->name = $fullname;
            $ummar->idacc = $account_id;
            $ummar->email = $email;
            $ummar->nik = $nik;
            $ummar->alamatktp = $alamat_ktp;
            $ummar->alamat = $alamat;
            $ummar->pekerjaan = $pekerjaan;
            $ummar->telp = $telepon;
            $ummar->perusahaan = $nama_perusahaan;
            $ummar->alamatkantor = $alamat_kantor;
            $ummar->lamakerja = $lama_bekerja;
            $ummar->gaji = $nominal_gaji;
            $ummar->telpkantor = $telp_kantor;
            $ummar->telpdarurat = $telp_darurat;
            $ummar->jenisbarang = $jenis_barang;
            $ummar->merk = $nama_merk;
            $ummar->spek = $spesifikasi;
            $ummar->ref = $referensi;
            $ummar->save();

            $r->session()->flash('msg', "Data account $fullname has been updated");
            return redirect('/ummar/custummar');
        } catch (\Throwable $e) {
            dd($e);
        }
    }

    public function deleteCustUmmar($id)
    {
        CustUmmar::find($id)->delete();
        return redirect()->back();
    }

}
