@extends('layout')
@section('content')
    <div class="d-flex">
        <h4>List Mahasiswa</h4>
        <div class="ms-auto">
            <a href="{{ route('mahasiswa.tambah') }}" class="btn btn-success">Tambah Data</a>
        </div>
    </div>

    <table class="table">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nim</th>
            <th>Kelas</th>
            <th>aksi</th>
        </tr>
        @foreach ($mahasiswa as $id => $mhs)
            <tr>
                <td>{{ $mhs->nama }}</td>
                <td\>{{ $mhs->alamat }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td\>{{ $mhs->kelas }}</td>
                        <td>
                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('mahasiswa.hapus', $mhs->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
            </tr>
        @endforeach
    </table>
@endsection
