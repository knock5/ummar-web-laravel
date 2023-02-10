<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cust_ummars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('idacc')->nullable()->unique();
            $table->string('email')->unique();
            $table->string('nik')->unique();
            $table->string('alamatktp');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->string('telp');
            $table->string('perusahaan');
            $table->string('alamatkantor');
            $table->string('lamakerja');
            $table->string('gaji');
            $table->string('telpkantor');
            $table->string('telpdarurat');
            $table->string('jenisbarang');
            $table->string('merk');
            $table->longText('spek');
            $table->string('ref')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cust_ummars');
    }
};
