@extends('layouts.app')

@section('title')
<title>Pegawai</title>
@endsection

@section('style')

@endsection

@section('content')
<h1>Input Pegawai</h1>
<form action="/pegawai" method="post">
    @csrf
    <div>
        <label for="pegawai_nama">Nama</label>
        <input type="text" name="pegawai_nama">
    </div>
    <div>
        <label for="pegawai_jabatan">Jabatan</label>
        <input type="text" name="pegawai_jabatan">
    </div>
    <div>
        <label for="pegawai_umur">Umur</label>
        <input type="text" name="pegawai_umur" onkeypress="return isNumberKeyCheck(event)">
    </div>
    <div>
        <label for="pegawai_alamat">Alamat</label>
        <textarea type="text" name="pegawai_alamat"></textarea>
    </div>
    <button type="submit" value="submit">Submit</button>

</form>
@endsection

@section('script')

@endsection