@extends('layouts.main')

@section('content')
    <h2>Hasil Prediksi & Recomendasi Perawatan</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Lokasi</th>
            <td>{{ $data->lokasi }}</td>
        </tr>
        <tr>
            <th>Nama Tanaman</th>
            <td>{{ $data->nama_tanaman }}</td>
        </tr>
        <tr>
            <th>Suhu Udara</th>
            <td>{{ $data->suhu_udara }} &deg;C</td>
        </tr>
        <tr>
            <th>Kelembapan Udara</th>
            <td>{{ $data->kelembapan_udara }} %</td>
        </tr>
        <tr>
            <th>Kelembapan Tanah</th>
            <td>{{ $data->kelembapan_tanah }} %</td>
        </tr>
        <tr>
            <th>Status Mikroklimat</th>
            <td>
                @if($data->status_mikroklimat == 'Kering')
                    <span style="color: red;"><strong>Kering</strong></span>
                @elseif($data->status_mikroklimat == 'Optimal')
                    <span style="color: green;"><strong>Optimal</strong></span>
                @else
                    <span style="color: blue;"><strong>Terlalu Lembap</strong></span>
                @endif
            </td>
        </tr>
        <tr>
            <th>Rekomendasi</th>
            <td>{{ $rekomendasi }}</td>
        </tr>
    </table>
    <br>
    <a href="{{ route('prediksi.index') }}">Input Data Baru</a>
@endsection