<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    function tampil()

    {
        $mahasiswa = mahasiswa::get();
        return view('mahasiswa.tampil', compact('mahasiswa'));
    }

    function tambah()
    {
        return view("mahasiswa.tambah");
    }

    function submit(Request $request)
    {
        $mahasiswa = new mahasiswa();
        $mahasiswa->nama  = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->kelas  = $request->kelas;
        $mahasiswa->nim = $request->nim;


        $mahasiswa->save();

        return redirect()->route('mahasiswa.tampil');
    }
    function edit($id)
    {
        $mahasiswa = mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    function update(Request $request, $id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->kelas = $request->kelas;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->update();
        return redirect()->route('mahasiswa.tampil');
    }
    function delete($id)
    {
        $mahasiswa = mahasiswa::find($id);

        $mahasiswa->delete();
        return redirect()->route('mahasiswa.tampil');
    }
}
