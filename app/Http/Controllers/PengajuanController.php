<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function create()
    {
        return view('pengajuan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:255|unique:pengajuan',
            'tanggal_lahir' => 'required|date',
            'status_perkawinan' => 'required|string',
            'data_pasangan' => 'nullable|string',

            'dealer' => 'required|string|max:255',
            'merk_kendaraan' => 'required|string|max:255',
            'model_kendaraan' => 'required|string|max:255',
            'tipe_kendaraan' => 'required|string|max:255',
            'warna_kendaraan' => 'required|string|max:255',
            'harga_kendaraan' => 'required|numeric',

            'asuransi' => 'required|string|max:255',
            'down_payment' => 'required|numeric',
            'lama_kredit' => 'required|integer',
            'angsuran_bulanan' => 'required|numeric',
        ]);

        Pengajuan::create($validated);

        return redirect()->route('pengajuan.create')->with('success', 'Pengajuan berhasil dibuat!');
    }

    public function approval()
    {
        $pengajuan = Pengajuan::where('status', 'PENDING')->get();
        return view('pengajuan.approval', compact('pengajuan'));
    }

    public function approve($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->update(['status' => 'APPROVED']);

        return redirect()->route('pengajuan.approval')->with('success', 'Pengajuan disetujui.');
    }

    public function reject($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->update(['status' => 'REJECTED']);

        return redirect()->route('pengajuan.approval')->with('success', 'Pengajuan ditolak.');
    }
}