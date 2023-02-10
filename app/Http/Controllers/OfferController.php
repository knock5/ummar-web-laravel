<?php

namespace App\Http\Controllers;

use App\Models\CustUmmar;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function offerView()
    {
        return view('layouts.formoffer', [
            'title' => 'Form Offer',
            'level' => 'user'
        ]);
    }

    public function saveOfferView(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'min:3', 'max:25'],
            'idacc' => ['required'],
            'email' => ['required', 'email:dns', 'unique:cust_ummars'],
            'nik' => ['required', 'unique:cust_ummars'],
            'alamatktp' => ['required'],
            'alamat' => ['required'],
            'pekerjaan' => ['required'],
            'telp' => ['required', 'unique:cust_ummars'],
            'perusahaan' => ['required'],
            'alamatkantor' => ['required'],
            'lamakerja' => ['required'],
            'gaji' => ['required'],
            'telpkantor' => ['required'],
            'telpdarurat' => ['required'],
            'jenisbarang' => ['required'],
            'merk' => ['required'],
            'spek' => ['required','min:10', 'max:255']
        ]);


        CustUmmar::create($validatedData);

        return redirect('/ummar/saveoffer');
    }


}
