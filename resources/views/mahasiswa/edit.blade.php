@extends('layout')

@section('content')
    <h4>Tambah Data Mahasiswa</h4>
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post">
        @csrf
        <label>Nama</label>
        <input type="text" name= "nama" value="{{ $mahasiswa->nama }}" class="form-control mb-2">
        <label>Alamat</label>
        <input type="text" name= "nama" value="{{ $mahasiswa->alamat }}" class="form-control mb-2">
        <label>Kelas</label>
        <input type="text" name= "nim" value="{{ $mahasiswa->kelas }}" class="form-control mb-2">
        <label>Nim</label>
        <input type="number" name= "nama" value="{{ $mahasiswa->nim }}" class="form-control mb-2">

        <button class="btn btn-primary">Edit</button>
    </form>
@endsection
