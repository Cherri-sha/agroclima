<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrediksiMikroklimat;

class PrediksiController extends Controller
{
    public function index()
    {
        return view('prediksi');
    }

    public function prosesData(Request $request)
    {
        $validated = $request->validate([
            'lokasi' => 'required',
            'nama_tanaman' => 'required',
            'suhu_udara' => 'required|numeric',
            'kelembapan_udara' => 'required|numeric',
            'kelembapan_tanah' => 'required|numeric',
        ]);

        $kelembapanTanah = $request->kelembapan_tanah;
        
        // Logika Penentuan Status & Rekomendasi
        if ($kelembapanTanah < 40) {
            $status = 'Kering';
            $rekomendasi = 'Segera lakukan penyiraman atau irigasi';
        } elseif ($kelembapanTanah <= 70) {
            $status = 'Optimal';
            $rekomendasi = 'Pertahankan pola perawatan saat ini';
        } else {
            $status = 'Terlalu Lembap';
            $rekomendasi = 'Kurangi penyiraman dan periksa drainase';
        }

        // Simpan ke Database via Eloquent
        $data = PrediksiMikroklimat::create([
            'lokasi' => $request->lokasi,
            'nama_tanaman' => $request->nama_tanaman,
            'suhu_udara' => $request->suhu_udara,
            'kelembapan_udara' => $request->kelembapan_udara,
            'kelembapan_tanah' => $request->kelembapan_tanah,
            'status_mikroklimat' => $status
        ]);

        return view('hasil', compact('data', 'rekomendasi'));
    }

    public function riwayat()
    {
        $riwayat = PrediksiMikroklimat::latest()->get();
        return view('riwayat', compact('riwayat'));
    }
}