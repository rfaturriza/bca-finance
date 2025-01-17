<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $table = 'pengajuan';
    protected $fillable = [
        'nama', 'nik', 'tanggal_lahir', 'status_perkawinan', 'data_pasangan',
        'dealer', 'merk_kendaraan', 'model_kendaraan', 'tipe_kendaraan', 'warna_kendaraan', 'harga_kendaraan',
        'asuransi', 'down_payment', 'lama_kredit', 'angsuran_bulanan', 'status',
    ];
}