<?php

namespace Database\Seeders;

use App\Models\AccAdmin;
use App\Models\AccUsersUmmarModel;
use App\Models\CustUmmar;
use Database\Factories\AccUsersUmmarModelFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        AccUsersUmmarModel::factory(10)->create();

        AccUsersUmmarModel::create([
            'name' => 'siska',
            'email' => 'siskaberi@gmail.com',
            'password' => 'siska123'
        ]);

        AccUsersUmmarModel::create([
            'name' => 'heru',
            'email' => 'herusiman21@gmail.com',
            'password' => 'heruisgod123'
        ]);

        CustUmmar::create([
            'name' => 'Siska Berliana',
            'idacc' => '11',
            'email' => 'siskaberi@gmail.com',
            'nik' => '3524250307990001',
            'alamatktp' => 'Jl. Peterongan, Gg. Umbarawa, Kec. Sukodadi, Kab. Lamongan',
            'alamat' => 'Jl. Peterongan, Gg. Umbarawa, Kec. Sukodadi, Kab. Lamongan',
            'pekerjaan' => 'Data Analyst',
            'telp' => '85143219876',
            'perusahaan' => 'PT. Astra Glbal Indo',
            'alamatkantor' => 'Jl. Kebangsaan, No.7, Kec. Lamongan, Kab. Lamongan',
            'lamakerja' => 'Lebih Dari 1 Tahun',
            'gaji' => '15720000',
            'telpkantor' => '35420001',
            'telpdarurat' => '85157829871',
            'jenisbarang' => 'Laptop',
            'merk' => 'Asus',
            'spek' => ' Asus Zenbook Pro 14 Duo OLED (UX8402)
                        -Windows 11 Home - ASUS recommends Windows 11 Pro for business
                        - Intel® Evo™ certified laptop
                        - Up to 12th gen Intel® Core™ i9 processor
                        - Up to NVIDIA® GeForce® RTX 3050 Ti
                        - Up to 32 GB memory
                        - Up to 2 TB SSD storage
                        - Up to 14.5" 2.8K OLED NanoEdge display
                        - Long-lasting 76 Wh battery',
            'ref' => ''
        ]);

        CustUmmar::create([
            'name' => 'Heru Simanjuntak',
            'idacc' => '12',
            'email' => 'herusiman21@gmail.com',
            'nik' => '3524220103990003',
            'alamatktp' => 'Jl. Merdeka, Gg. Semanggi, Kec. Sidorejo, Kab. Surabaya',
            'alamat' => 'Jl. Merdeka, Gg. Semanggi, Kec. Sidorejo, Kab. Surabaya',
            'pekerjaan' => 'Software Engineer',
            'telp' => '82189235577',
            'perusahaan' => 'PT. Mayora Insani',
            'alamatkantor' => 'Jl. Panglima Sudirman, No. 45, Kec. Jatirejo, Kab. Surabaya',
            'lamakerja' => 'Lebih Dari 1 Tahun',
            'gaji' => '17055000',
            'telpkantor' => '20040099',
            'telpdarurat' => '85545547800',
            'jenisbarang' => 'TV',
            'merk' => 'Samsung',
            'spek' => ' 65" Class QN900B Samsung Neo QLED 8K Smart TV (2022)
                        - Melarikan diri ke layar yang hampir tepi ke tepi. Hampir tidak ada batasan. Tidak ada gangguan.
                        - Rasakan detail luar biasa pada layar yang dibuat brilian oleh Mini LED Samsung sendiri.
                        - Manjakan indra Anda dalam kecemerlangan ekstrem warna-warna seperti aslinya di seluruh spektrum penuh. *
                        - Diselimuti oleh suara surround sinematik spektakuler Dolby Atmos yang terpasang langsung di TV.',
            'ref' => ''
        ]);


    }
}
