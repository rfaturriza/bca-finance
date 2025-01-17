<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('pengajuan', function (Blueprint $table) {
        $table->id();
        // Data Konsumen
        $table->string('nama');
        $table->string('nik')->unique();
        $table->date('tanggal_lahir');
        $table->string('status_perkawinan');
        $table->string('data_pasangan')->nullable();

        // Data Kendaraan
        $table->string('dealer');
        $table->string('merk_kendaraan');
        $table->string('model_kendaraan');
        $table->string('tipe_kendaraan');
        $table->string('warna_kendaraan');
        $table->decimal('harga_kendaraan', 15, 2);

        // Data Pinjaman
        $table->string('asuransi');
        $table->decimal('down_payment', 15, 2);
        $table->integer('lama_kredit');
        $table->decimal('angsuran_bulanan', 15, 2);

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan');
    }
};
