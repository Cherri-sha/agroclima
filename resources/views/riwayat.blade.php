@extends('layouts.main')

@section('content')
    <h2>Riwayat Prediksi Mikroklimat</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Lokasi</th>
                <th>Tanaman</th>
                <th>Suhu Udara (&deg;C)</th>
                <th>Kelembapan Udara (%)</th>
                <th>Kelembapan Tanah (%)</th>
                <th>Status</th>
                <th>Waktu Dicatat</th>
            </tr>
        </thead>
        <tbody>
            @forelse($riwayat as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->lokasi }}</td>
                    <td>{{ $item->nama_tanaman }}</td>
                    <td>{{ $item->suhu_udara }}</td>
                    <td>{{ $item->kelembapan_udara }}</td>
                    <td>{{ $item->kelembapan_tanah }}</td>
                    <td>{{ $item->status_mikroklimat }}</td>
                    <td>{{ $item->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">Belum ada data riwayat prediksi.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection