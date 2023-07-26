@extends('layouts.app')

@section('title')
<title>Data diri</title>
@endsection

@section('style')
<style>
    table,
    th,
    td {
        border: 1px solid;
    }
</style>
@endsection

@section('content')
<h1>Input Data Diri</h1>
<form id="form">
    <div>
        <label for="pegawai_nama">Nama Lengkap</label>
        <input type="text" name="nama">
    </div>
    <div>
        <label for="pegawai_nama">Tempat, Tanggal Lahir</label>
        <input type="text" name="tempat">
    </div>
    <div>
        <label for="pegawai_alamat">Alamat</label>
        <textarea type="text" name="alamat"></textarea>
    </div>
    <div>
        <label for="pegawai_umur">No.Telp/HP</label>
        <input type="text" name="telp">
    </div>
    <div>
        <label for="pegawai_umur">Jenis Kelamin</label>
        <input type="radio" value="laki-laki">laki laki
        <input type="radio" value="perempuan">perempuan
    </div>
    <div>
        <label for=" pegawai_umur">Agama</label>
        <select name="agama">
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
        </select>
    </div>
    <div>
        <label for="pegawai_umur">Hobi</label>
        <input type="checkbox" name="hobi1" value="baca">Baca
        <input type="checkbox" name="hobi1" value="main">Main
    </div>

</form>
<button onclick="tampil()">Submit</button>
@endsection

@section('script')
<script>
    function tampil() {
        var alldata = $('#form').formSerialize();
        console.log(alldata);
        alert(alldata);
    }
</script>
@endsection