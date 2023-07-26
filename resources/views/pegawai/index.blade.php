@extends('layouts.app')

@section('title')
<title>Pegawai</title>
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
<h1>Data Pegawai</h1>
<button onclick="tambahData()">Tambah Data</button>
@if(count($pegawai) == 0)
<h3>Tidak ada data</h3>
@else
<table>
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Umur</th>
        <th>Alamat</th>
    </tr>
    @foreach ($pegawai as $p)
    <tr>
        <td>$p->pegawai_id</td>
        <td>$p->pegawai_nama</td>
        <td>$p->pegawai_jabatan</td>
        <td>$p->pegawai_umur</td>
        <td>$p->pegawai_alamat</td>
    </tr>
    @endforeach
</table>
@endif
@endsection

@section('script')
<script>
    function tambahData() {
        window.location.href = '/pegawai/create'
    }
</script>
@endsection