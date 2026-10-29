@extends('layouts.main')

@section('content')
    <h2>Input Hasil Prediksi Mikroklimat</h2>
    <form action="{{ route('prediksi.proses') }}" method="POST">
        @csrf
        <label for="lokasi">Lokasi Lahan:</label><br>
        <select name="lokasi" id="lokasi" required>
            <option value="Garut Kota">Garut Kota</option>
            <option value="Tarogong Kaler">Tarogong Kaler</option>
            <option value="Samarang">Samarang</option>
        </select><br><br>

        <label for="nama_tanaman">Nama Tanaman:</label><br>
        <input type="text" name="nama_tanaman" placeholder="Contoh: Padi, Jagung, Cabai" required><br><br>

        <label for="suhu_udara">Prediksi Suhu Udara (&deg;C):</label><br>
        <input type="number" step="0.1" name="suhu_udara" required><br><br>

        <label for="kelembapan_udara">Prediksi Kelembapan Udara (%):</label><br>
        <input type="number" name="kelembapan_udara" required><br><br>

        <label for="kelembapan_tanah">Prediksi Kelembapan Tanah (%):</label><br>
        <input type="number" name="kelembapan_tanah" required><br><br>

        <button type="submit">Proses & Simpan</button>
    </form>
@endsection