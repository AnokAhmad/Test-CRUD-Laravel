@extends('layout')

@section('content')
    <h4>Tambah Data Mahasiswa</h4>
    <form action="{{ route('mahasiswa.submit') }}" method="post">
        @csrf
        <label>Nama</label>
        <input type="text" name= "nama" class="form-control mb-2">
        <label>Alamat</label>
        <input type="text" name= "nama" class="form-control mb-2">
        <label>Kelas</label>
        <input type="text" name= "nim" class="form-control mb-2">
        <label>Nim</label>
        <input type="number" name= "nama" class="form-control mb-2">

        <button class="btn btn-primary">Tambah</button>
    </form>
@endsection
